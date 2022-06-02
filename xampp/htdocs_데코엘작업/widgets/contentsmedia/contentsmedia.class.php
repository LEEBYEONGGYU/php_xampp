<?php
	class contentsmedia extends WidgetHandler {
		function proc($args) {
			//추출 대상
			if(!in_array($args->content_type, array('module','document','manual'))) $args->content_type = 'module';
			// 문서 번호
			$args->document_srl = (int)$args->document_srl;
			// 직접 입력
			if($args->content_type=="manual" && $args->direct_play!="") {
				$args->direct_play = urldecode($args->direct_play);
				$args->mplayer_url = preg_split('/,/',$args->direct_play);
				if(is_array($args->mplayer_url) == FALSE && count($args->mplayer_url)<1) return "등록된 미디어가 없거나 선택되어 있지 않습니다.";
			}
			// 기본 목록수 : 5
			$args->list_count = (int)$args->list_count;
			if(!$args->list_count) $args->list_count = 5;
			// 표시항목
			$args->option_view_arr = explode(',',$args->option_view);
			for($i=0,$c=count($args->option_view_arr);$i<$c;$i++) {
				switch($args->option_view_arr[$i]){
					case 'title':
						$args->show_title = "Y";
						break;
					case 'thumbnail':
						$args->show_thumbnail = "Y";
						break;
					case 'regdate':
						$args->show_regdate = "Y";
						break;
					case 'nickname':
						$args->show_nickname = "Y";
						break;
					case 'content':
						$args->show_content = "Y";
						break;
					case 'browser_title':
						$args->show_browser_title = "Y";
						break;
					case 'category':
						$args->show_category = "Y";
						break;
					case 'comment_count':
						$args->show_comment_count = "Y";
						break;
					case 'icon':
						$args->show_icon = "Y";
						break;
				}
			}
			if($args->show_title!='Y') $args->show_title = 'N';
			if($args->show_thumbnail!='Y') $args->show_thumbnail = 'N';
			if($args->show_regdate!='Y') $args->show_regdate = 'N';
			if($args->show_nickname!='Y') $args->show_nickname = 'N';
			if($args->show_content!='Y') $args->show_content = 'N';
			if($args->show_browser_title!='Y') $args->show_browser_title = 'N';
			if($args->show_category!='Y') $args->show_category = 'N';
			if($args->show_comment_count!='Y') $args->show_comment_count = 'N';
			if($args->show_icon!='Y') $args->show_icon = 'N';
			// 정렬 방법
			if(!in_array($args->order_target, array('list_order','update_order'))) $args->order_target = 'list_order';
			if(!in_array($args->order_type, array('asc','desc'))) $args->order_type = 'asc';
			// 게시물 순서 섞기
			if($args->items_shuffle!='Y') $args->items_shuffle = 'N';
			// new 아이콘 출력 시간
			if($args->duration_new=='') $args->duration_new = 12;
			// 출력 목록
			$args->playoption_arr = explode(',',$args->playoption);
			for($i=0,$c=count($args->playoption_arr);$i<$c;$i++) {
				switch($args->playoption_arr[$i]){
					case 'control':
						$args->show_control = "true";
						break;
					case 'autoplay':
						$args->autoplay = "true";
						break;
				}
			}
			if($args->show_control!='true') $args->show_control = 'false';
			if($args->autoplay!='true') $args->autoplay = 'false';
			$args->titlebox_width = (int)$args->titlebox_width;
			if($args->titlebox_width=='') $args->titlebox_width = 300;
			$args->rows_list_count = (int)$args->rows_list_count;
			if($args->rows_list_count=='') $args->rows_list_count = 4;
			// 컬러셋
			if(!in_array($args->cm_colorset, array('random','orange','neon','pink','bluegloss','yellow','shape','purple','brown','white','black','gray','N'))) $args->cm_colorset = 'random';
			// 그라디언트
			if(!in_array($args->cm_gradient, array('Y','N'))) $args->cm_gradient = 'Y';

			//컬러셋
			$color_name = array("orange","neon","pink","bluegloss","yellow","shape","purple","brown","white","black","gray");
			$cm_grbdcolor = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#b7deed","#c1bfea","#e9d4b3","#ffffff","#000","#333");
			$cm_grbgcolor = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#b7deed","#c1bfea","#e9d4b3","#ffffff","#000","#333");
			$cm_gr1st = array("#ffdecc","#d2ff52","#fcecfc","#7db9e8","#fefcea","#b7deed","#ebe9f9","#f3e2c7","#ffffff","#4B4B4B","#B9B9B9");
			$cm_gr2nd = array("N","N","#fba6e1","#207cca","N","#71ceef","#d8d0ef","#c19e67","#f3f3f3","N","N");
			$cm_gr3rd = array("N","N","#fd89d7","#2989d8","N","#21b4e2","#cec7ec","#b68d4c","#ededed","N","N");
			$cm_gr4th = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#b7deed","#c1bfea","#e9d4b3","#ffffff","#151515","#6A6A6A");
			$cm_titlebg = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#21b4e2","#c1bfea","#b68d4c","#ffffff","#151515","#6A6A6A");
			$cm_title_color = array("#171717","#171717","#171717","#ffffff","#171717","#171717","#171717","#171717","#171717","#ffffff","#ffffff");
			$cm_grhoverbg = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#b7deed","#c1bfea","#e9d4b3","#ffffff","#000","#333");
			$cm_grhoverft = array("#ff5d00","#91e842","#ff7cd8","#1e5799","#f1da36","#b7deed","#c1bfea","#e9d4b3","#ffffff","#000","#333");

			if($args->cm_colorset == "random"){
				$color_no = mt_rand(0, 10);
				$args->cm_grbdcolor = $cm_grbdcolor[$color_no];
				$args->cm_grbgcolor = $cm_grbgcolor[$color_no];
				$args->cm_gr1st = $cm_gr1st[$color_no];
				$args->cm_gr2nd = $cm_gr2nd[$color_no];
				$args->cm_gr3rd = $cm_gr3rd[$color_no];
				$args->cm_gr4th = $cm_gr4th[$color_no];
				$args->cm_titlebg = $cm_titlebg[$color_no];
				$args->cm_title_color = $cm_title_color[$color_no];
				$args->cm_grhoverbg = $cm_grhoverbg[$color_no];
				$args->cm_grhoverft = $cm_grhoverft[$color_no];
			} elseif($args->cm_colorset!="random"&&$args->cm_colorset!="N"){
				$color_no = array_search($args->cm_colorset, $color_name);
				$args->cm_grbdcolor = $cm_grbdcolor[$color_no];
				$args->cm_grbgcolor = $cm_grbgcolor[$color_no];
				$args->cm_gr1st = $cm_gr1st[$color_no];
				$args->cm_gr2nd = $cm_gr2nd[$color_no];
				$args->cm_gr3rd = $cm_gr3rd[$color_no];
				$args->cm_gr4th = $cm_gr4th[$color_no];
				$args->cm_titlebg = $cm_titlebg[$color_no];
				$args->cm_title_color = $cm_title_color[$color_no];
				$args->cm_grhoverbg = $cm_grhoverbg[$color_no];
				$args->cm_grhoverft = $cm_grhoverft[$color_no];
			} else {
				if(!$args->cm_grbdcolor||$args->cm_grbdcolor == "transparent") $args->cm_grbdcolor = "#333";
				if(!$args->cm_grbgcolor||$args->cm_grbgcolor == "transparent") $args->cm_grbgcolor = "#333";
				if(!$args->cm_gr1st||$args->cm_gr1st == "transparent") $args->cm_gr1st = "#B9B9B9";
				if(!$args->cm_gr2nd) $args->cm_gr2nd = '';
				if(!$args->cm_gr3rd) $args->cm_gr3rd = '';
				if(!$args->cm_gr4th||$args->cm_gr4th == "transparent") $args->cm_gr4th = "#6A6A6A";
				if(!$args->cm_titlebg) $args->cm_titlebg = "#ffffff";
				if(!$args->cm_title_color||$args->cm_title_color == "transparent") $args->cm_title_color = "#ffffff";
				if(!$args->cm_grhoverbg||$args->cm_grhoverbg == "transparent") $args->cm_grhoverbg = "#333";
				if(!$args->cm_grhoverft||$args->cm_grhoverft == "transparent") $args->cm_grhoverft = "#333";
			}

			if(!$args->cm_gr2ndpos) $args->cm_gr2ndpos = "50%";
			if(!$args->cm_gr3rdpos) $args->cm_gr3rdpos = "51%";
			if(!$args->cm_grbdsize) $args->cm_grbdsize = "1";
			// 그림자 효과
			if($args->cm_shadow!='Y') $args->cm_shadow = 'N';
			// 제목 글자수
			$args->subject_cut_size = (int)$args->subject_cut_size;
			if($args->subject_cut_size=='') $args->subject_cut_size = 0;
			// 제목 글씨체
			if($args->title_font_family=='') $args->title_font_family = "Default";
			// 내용 글자수
			$args->content_cut_size = (int)$args->content_cut_size;
			if($args->content_cut_size=='') $args->content_cut_size = 200;
			// 내용 글씨체
			if($args->content_font_family=='') $args->content_font_family = "Default";
			if($args->thumbnail_type=='') $args->thumbnail_type = 'crop';
			$args->thumbnail_width = (int)$args->thumbnail_width;
			if($args->thumbnail_width=='') $args->thumbnail_width = 80;
			$args->thumbnail_height = (int)$args->thumbnail_height;
			if($args->thumbnail_height=='') $args->thumbnail_height = 60;
			$args->media_width = (int)$args->media_width;
			if($args->media_width=='') $args->media_width = 400;
			$args->media_height = (int)$args->media_height;
			if($args->media_height=='') $args->media_height = 250;
			if($args->order_target=="list_order") $args->media_order = "등록일";
			elseif($args->order_target=="update_order") $args->media_order = "변경일";
			else $args->media_order = "목록";

			if($args->skin=="bxSlider") $media_size = 'thumbnail';
			else $media_size = 'media';

			if($media_size == 'thumbnail') {
				$args->mwidth = $args->thumbnail_width;
				$args->mheight = $args->thumbnail_height;
			} else {
				$args->mwidth = $args->media_width;
				$args->mheight = $args->media_height;
			}

			// 내부적으로 쓰이는 변수 설정
			$oModuleModel = &getModel('module');
			$module_srls = $args->modules_info = $args->module_srls_info = $args->mid_lists = array();
			$site_module_info = Context::get('site_module_info');

			// 대상 모듈이 선택되어 있지 않으면 해당 사이트의 전체 모듈을 대상으로 함
			if(!$args->module_srls){
				unset($obj);
				$obj->site_srl = (int)$site_module_info->site_srl;
				$output = executeQueryArray('widgets.contentsmedia.getMids', $obj);
				if($output->data) {
					foreach($output->data as $key => $val) {
						$args->modules_info[$val->mid] = $val;
						$args->module_srls_info[$val->module_srl] = $val;
						$args->mid_lists[$val->module_srl] = $val->mid;
						$module_srls[] = $val->module_srl;
					}
				}

				$args->modules_info = $oModuleModel->getMidList($obj);
				// 대상 모듈이 선택되어 있으면 해당 모듈만 추출
			} else {
				$obj->module_srls = $args->module_srls;
				$output = executeQueryArray('widgets.contentsmedia.getMids', $obj);
				if($output->data) {
					foreach($output->data as $key => $val) {
						$args->modules_info[$val->mid] = $val;
						$args->module_srls_info[$val->module_srl] = $val;
						$module_srls[] = $val->module_srl;
					}
					$idx = explode(',',$args->module_srls);
					for($i=0,$c=count($idx);$i<$c;$i++) {
						$srl = $idx[$i];
						if(!$args->module_srls_info[$srl]) continue;
						$args->mid_lists[$srl] = $args->module_srls_info[$srl]->mid;
					}
				}
			}

			// 아무런 모듈도 검색되지 않았다면 종료
			if(!count($args->modules_info)) return Context::get('msg_not_founded');
			$args->module_srl = implode(',',$module_srls);

			if($args->content_type=='manual' && $args->direct_play!="") $media_items = $this->_getMediaItems($args);
			else if($args->content_type=='document' && $args->document_srl!="") $media_items = $this->_getDocumentItems($args);
			else $media_items = $this->_getModuleItems($args);

			$output = $this->_compile($args,$media_items);
			return $output;
		}

		function _getMediaItems($args){
			$mplayerlist = $args->mplayer_url;

			// 페이지 정보가져오기
			$oModuleModel = &getModel('module');
			$mid = Context::get('mid');;
			$module_info = $oModuleModel->getModuleInfoByMid($mid);
			$document_srl = $module_info->module_srl;

			//위젯 변수 알아보기
			//$what_is[] = $UploadedFilelist;
			//$args->mplayer_url = explode('||',$args->direct_play);
			//Context::set('is_what', $document_srl);
			$media_items = array();
			foreach($mplayerlist as $key => $item){

				$content_item = new mediaItem( $module_info->browser_title );
				$content_item->setMediaType($item);
				$content_item->setLink($item);

				if($content_item->get('mediafile')) {
					$content_item->setMedia($content_item->get('mediafile'),$args->mwidth,$args->mheight);
				} elseif(preg_match('#^http:\/\/(.*)\.(jpg|png|jpeg|gif)$#i',strtolower($item))) {
					$thumbnail = $this->setExtThumbnail($item,$args->thumbnail_width,$args->thumbnail_height,$args->thumbnail_type,$document_srl);
					$imgslider = $this->setExtThumbnail($item,$args->media_width,$args->media_height,$args->thumbnail_type,$document_srl);
					if($thumbnail) $content_item->setThumbnail($thumbnail);
					if($imgslider) $content_item->setImageMax($imgslider);
				}
				if($content_item->get('mediatype')!='') $media_items[] = $content_item;
			}
			return $media_items;
		}

		function setExtThumbnail($ExtFile, $width = 80, $height = 60, $thumbnail_type, $document_srl){
			if(!preg_match('/\.(jpg|png|jpeg|gif)$/i',strtolower($ExtFile))) return false;
			// 메모리 설정
			@ini_set('memory_limit', '128M');

			// 높이 지정이 별도로 없으면 정사각형으로 생성
			if(!$height) $height = $width;
			$thumbnail_path = null;
			$thumbnail_file = null;
			$source_file = null;
			$tmp_srcfile = null;
			$tmp_thumfile = null;
			$requesturl=Context::getRequestUri();

			if(!is_dir('./files/cache/tmp')) FileHandler::makeDir('./files/cache/tmp');
			$thumbnail_path = sprintf('files/cache/tmp/%s', $document_srl);
			$source_file = sprintf('%s_%s', $thumbnail_path,basename($ExtFile));
			$thumbnail_file = sprintf('%s_%dx%d.%s_%s', $thumbnail_path, $width, $height, $thumbnail_type, basename($ExtFile));

			if(file_exists($thumbnail_file)&&filesize($thumbnail_file)>10) {
				return $requesturl.$thumbnail_file;
			} else {
				if(!file_exists($source_file)||filesize($source_file)<10) {
					$tmp_srcfile = FileHandler::getRemoteFile($ExtFile, $source_file);
					if(!$tmp_srcfile) return false;
				}
				if(!file_exists($thumbnail_file)||filesize($thumbnail_file)<10) {
					$tmp_thumfile = FileHandler::createImageFile($source_file, $thumbnail_file, $width, $height, 'png', $thumbnail_type);
					if(!$tmp_thumfile) return false;
				}
				if(file_exists($thumbnail_file)&&filesize($thumbnail_file)>10) return $requesturl.$thumbnail_file;
				else return false;
			}
		}


		function _getDocumentItems($args){
			// document 모듈의 model 객체를 받아서 결과를 객체화 시킴
			$oDocumentModel = &getModel('document');

			// Get a list of documents
			$obj->document_srl = $args->document_srl;
			//XE 버전체크
			$xever = __ZBXE_VERSION__;
			if($xever > '1.4.5.10') {
				$obj->statusList = array('PUBLIC');
				$output = executeQueryArray('widgets.contentsmedia.getDocuments152', $obj);
			} else {
				$output = executeQueryArray('widgets.contentsmedia.getDocuments', $obj);
			}
			if(!$output->toBool() || !$output->data) return;

			// 결과가 있으면 각 문서 객체화를 시킴
			$media_items = array();
			$first_thumbnail_idx = -1;
			if(count($output->data)) {
				foreach($output->data as $key => $attribute) {
					$oDocument = new documentItem();
					$oDocument->setAttribute($attribute, false);
					$GLOBALS['XE_DOCUMENT_LIST'][$oDocument->document_srl] = $oDocument;
					$document_srls[] = $oDocument->document_srl;
				}
				$oDocumentModel->setToAllDocumentExtraVars();
				for($i=0,$c=count($document_srls);$i<$c;$i++) {
					$oDocument = $GLOBALS['XE_DOCUMENT_LIST'][$document_srls[$i]];
					$document_srl = $oDocument->document_srl;
					$module_srl = $oDocument->get('module_srl');
					$category_srl = $oDocument->get('category_srl');
					//추가된 구문들
					$extvar = $oDocument->getExtraEidValue($args->ext_var);
					if($extvar && !preg_match('/^([a-z]+):\/\//i',$extvar)) $extvar = 'http://'.$extvar;
					$thumbnail = $oDocument->getThumbnail($args->thumbnail_width,$args->thumbnail_height,$args->thumbnail_type);
					$image_max = $oDocument->getThumbnail($args->media_width,$args->media_height,$args->thumbnail_type);
					$UploadedFilelist = $oDocument->getUploadedFiles();
					$url = getSiteUrl($domain,'','document_srl',$document_srl);

					$content_item = new mediaItem( $args->module_srls_info[$module_srl]->browser_title );
					$content_item->adds($oDocument->getObjectVars());
					$content_item->add('original_content', $oDocument->get('content'));
					$content_item->setTitle($oDocument->getTitleText()); // 제목 굵기, 색깔 무시
					$content_item->setCategory( $category_lists[$module_srl][$category_srl]->title );
					$content_item->setDomain( $args->module_srls_info[$module_srl]->domain );
					$content_item->setContent($oDocument->getSummary($args->content_cut_size));
					$content_item->setExtValue($extvar); // 확장변수
					$content_item->setThumbnail($thumbnail);
					$content_item->setImageMax($image_max);
					if($extvar!="") $content_item->setMediaType($extvar);
					else $content_item->setMediaType($UploadedFilelist);
					$content_item->setCaption($UploadedFilelist);
					$content_item->setLink($url);
					$content_item->setLinkDoc($url); // 게시글 주소
					if($content_item->get('mediafile')) $content_item->setMedia($content_item->get('mediafile'),$args->mwidth,$args->mheight);
					$content_item->setExtraImages($oDocument->printExtraImages($args->duration_new * 60 * 60));
					$content_item->setUpFileList($UploadedFilelist);
					$content_item->setVotedCount($oDocument->get('voted_count'));
					$content_item->setReadedCount($oDocument->get('readed_count'));
					$content_item->add('mid', $args->mid_lists[$module_srl]);
					$content_item->add('slide_id', mt_rand()); // 게시글 마다 고유번호 지정
					$content_item->add('is_what', $version); // 변수이름값은?
					if($first_thumbnail_idx==-1 && $thumbnail) $first_thumbnail_idx = $i;
					$media_items[] = $content_item;
				}
				$media_items[0]->setFirstThumbnailIdx($first_thumbnail_idx);
			}
			return $media_items;
		}

		function _getModuleItems($args){
			// document 모듈의 model 객체를 받아서 결과를 객체화 시킴
			$oDocumentModel = &getModel('document');
			// 분류 구함
			$obj->module_srl = $args->module_srl;
			$output = executeQueryArray('widgets.contentsmedia.getCategories',$obj);
			if($output->toBool() && $output->data) {
				foreach($output->data as $key => $val) {
					$category_lists[$val->module_srl][$val->category_srl] = $val;
				}
			}
			// 글 목록을 구함
			$obj->module_srl = $args->module_srl;
			$obj->category_srl = $args->category_srl;
			$obj->sort_index = $args->order_target;
			$obj->order_type = $args->order_type=="desc"?"asc":"desc";
			$obj->list_count = $args->list_count;

			//XE 버전체크
			$xever = __ZBXE_VERSION__;
			if($xever > '1.4.5.10') {
				$obj->statusList = array('PUBLIC');
				$output = executeQueryArray('widgets.contentsmedia.getNewestDocuments152', $obj);
			} else {
				$output = executeQueryArray('widgets.contentsmedia.getNewestDocuments', $obj);
			}
			if(!$output->toBool() || !$output->data) return;
			// 결과가 있으면 각 문서 객체화를 시킴
			$media_items = array();
			$first_thumbnail_idx = -1;
			if(count($output->data)) {
				foreach($output->data as $key => $attribute) {
					$oDocument = new documentItem();
					$oDocument->setAttribute($attribute, false);
					$GLOBALS['XE_DOCUMENT_LIST'][$oDocument->document_srl] = $oDocument;
					$document_srls[] = $oDocument->document_srl;
				}
				$oDocumentModel->setToAllDocumentExtraVars();
				for($i=0,$c=count($document_srls);$i<$c;$i++) {
					$oDocument = $GLOBALS['XE_DOCUMENT_LIST'][$document_srls[$i]];
					$document_srl = $oDocument->document_srl;
					$module_srl = $oDocument->get('module_srl');
					$category_srl = $oDocument->get('category_srl');
					//추가된 구문들
					$extvar = $oDocument->getExtraEidValue($args->ext_var);
					if($extvar && !preg_match('/^([a-z]+):\/\//i',$extvar)) $extvar = 'http://'.$extvar;
					$thumbnail = $oDocument->getThumbnail($args->thumbnail_width,$args->thumbnail_height,$args->thumbnail_type);
					$image_max = $oDocument->getThumbnail($args->media_width,$args->media_height,$args->thumbnail_type);
					$UploadedFilelist = $oDocument->getUploadedFiles();
					$url = getSiteUrl($domain,'','document_srl',$document_srl);

					$content_item = new mediaItem( $args->module_srls_info[$module_srl]->browser_title );
					$content_item->adds($oDocument->getObjectVars());
					$content_item->add('original_content', $oDocument->get('content'));
					$content_item->setTitle($oDocument->getTitleText()); // 제목 굵기, 색깔 무시
					$content_item->setCategory( $category_lists[$module_srl][$category_srl]->title );
					$content_item->setDomain( $args->module_srls_info[$module_srl]->domain );
					$content_item->setContent($oDocument->getSummary($args->content_cut_size));
					$content_item->setExtValue($extvar); // 확장변수
					$content_item->setThumbnail($thumbnail);
					$content_item->setImageMax($image_max);
					if($extvar!="") $content_item->setMediaType($extvar);
					else $content_item->setMediaType($UploadedFilelist);
					$content_item->setCaption($UploadedFilelist);
					$content_item->setLink($url);
					$content_item->setLinkDoc($url); // 게시글 주소
					if($content_item->get('mediafile')) $content_item->setMedia($content_item->get('mediafile'),$args->mwidth,$args->mheight);
					$content_item->setExtraImages($oDocument->printExtraImages($args->duration_new * 60 * 60));
					$content_item->setUpFileList($UploadedFilelist);
					$content_item->setVotedCount($oDocument->get('voted_count'));
					$content_item->setReadedCount($oDocument->get('readed_count'));
					$content_item->add('mid', $args->mid_lists[$module_srl]);
					$content_item->add('slide_id', mt_rand()); // 게시글 마다 고유번호 지정
					$content_item->add('is_what', $version); // 변수이름값은?
					if($first_thumbnail_idx==-1 && $thumbnail) $first_thumbnail_idx = $i;
					$media_items[] = $content_item;
				}
				$media_items[0]->setFirstThumbnailIdx($first_thumbnail_idx);
			}
			return $media_items;
		}

		function _getSummary($content, $str_size = 50)
		{
			$content = preg_replace('!(<br[\s]*/{0,1}>[\s]*)+!is', ' ', $content);
			// </p>, </div>, </li> 등의 태그를 공백 문자로 치환
			$content = str_replace(array('</p>', '</div>', '</li>'), ' ', $content);
			// 태그 제거
			$content = preg_replace('!<([^>]*?)>!is','', $content);
			// < , > , " 를 치환
			$content = str_replace(array('&lt;','&gt;','&quot;','&nbsp;'), array('<','>','"',' '), $content);
			// 연속된 공백문자 삭제
			$content = preg_replace('/ ( +)/is', ' ', $content);
			// 문자열을 자름
			$content = trim(cut_str($content, $str_size, $tail));
			// >, <, "를 다시 복구
			$content = str_replace(array('<','>','"'),array('&lt;','&gt;','&quot;'), $content);
			// 영문이 연결될 경우 개행이 안 되는 문제를 해결
			$content = preg_replace('/([a-z0-9\+:\/\.\~,\|\!\@\#\$\%\^\&\*\(\)\_]){20}/is',"$0-",$content);
			return $content; 
		}

		function _compile($args,$media_items){
			//$args 를 $media_info 에 저장
			$media_info->content_type = $args->content_type;
			$media_info->module_srls = $args->module_srls;
			$media_info->ext_var = $args->ext_var;
			$media_info->direct_play = $args->direct_play;
			$media_info->mplayer_url = $args->mplayer_url;
			$media_info->list_count = $args->list_count;
			$media_info->option_view = $args->option_view;
 			$media_info->option_view_arr = $args->option_view_arr;
			$media_info->show_title = $args->show_title;
			$media_info->show_thumbnail = $args->show_thumbnail;
			$media_info->show_regdate = $args->show_regdate;
			$media_info->show_nickname = $args->show_nickname;
			$media_info->show_content = $args->show_content;
			$media_info->show_browser_title = $args->show_browser_title;
			$media_info->show_category = $args->show_category;
			$media_info->show_comment_count = $args->show_comment_count;
			$media_info->show_icon = $args->show_icon;
			$media_info->order_target = $args->order_target;
			$media_info->order_type = $args->order_type;
			$media_info->items_shuffle = $args->items_shuffle;
			$media_info->duration_new = $args->duration_new * 60*60;
			$media_info->playoption = $args->playoption;
			$media_info->playoption_arr = $args->playoption_arr;
			$media_info->show_control = $args->show_control;
			$media_info->autoplay = $args->autoplay;
			$media_info->titlebox_width = $args->titlebox_width;
			$media_info->rows_list_count = $args->rows_list_count;
			$media_info->cm_colorset = $args->cm_colorset;
			$media_info->cm_gradient = $args->cm_gradient;
			$media_info->cm_gr1st = $args->cm_gr1st;
			$media_info->cm_gr2ndpos = $args->cm_gr2ndpos;
			$media_info->cm_gr2nd = $args->cm_gr2nd;
			$media_info->cm_gr3rdpos = $args->cm_gr3rdpos;
			$media_info->cm_gr3rd = $args->cm_gr3rd;
			$media_info->cm_gr4th = $args->cm_gr4th;
			$media_info->cm_title_color = $args->cm_title_color;
			$media_info->cm_titlebg = $args->cm_titlebg;
			$media_info->cm_grbdcolor = $args->cm_grbdcolor;
			$media_info->cm_grbdsize = $args->cm_grbdsize;
			$media_info->cm_shadow = $args->cm_shadow;
			$media_info->cm_grhoverbg = $args->cm_grhoverbg;
			$media_info->cm_grhoverft = $args->cm_grhoverft;
			$media_info->subject_cut_size = $args->subject_cut_size;
			$media_info->title_font_family = $args->title_font_family;
			$media_info->title_font_user = $args->title_font_user;
			$media_info->title_font_size = $args->title_font_size;
			$media_info->title_font_color = $args->title_font_color;
			$media_info->title_height = $args->title_height;
			$media_info->content_cut_size = $args->content_cut_size;
			$media_info->content_font_family = $args->content_font_family;
			$media_info->content_font_user = $args->content_font_user;
			$media_info->content_font_color = $args->content_font_color;
			$media_info->content_height = $args->content_height;
			$media_info->thumbnail_type = $args->thumbnail_type;
			$media_info->thumbnail_width = $args->thumbnail_width;
			$media_info->thumbnail_height = $args->thumbnail_height;
			$media_info->media_width = $args->media_width;
			$media_info->media_height = $args->media_height;
			//추가적인 항목들
			$media_info->media_order = $args->media_order;
			if($args->show_content=='Y' || $args->show_title=='Y') $media_info->show_content_title = 'Y';
			//DB에서 가져온 정보를 저장
			$media_info->media_items = $media_items;
			unset($args->playoption_arr);
			unset($args->modules_info);
			$media_info->is_what = Context::get('is_what');


			// html 파일에 $media_info 의 내용을 전달하는 기본 구문
			$tpl_path = sprintf('%sskins/%s', $this->widget_path, $args-> skin);
			$tpl_file = "media";
			Context::set ('colorset', $args->colorset);
			Context::set('media_info', $media_info);
			Context::set('media_items', $media_items);
			Context::set('browser_info', $args->module_srls_info);
			$oTemplate = &TemplateHandler::getInstance();
			//return $oTemplate->compile($tpl_path, $tpl_file);
			// 템플릿 컴파일하여 html로 return
			$act = Context::get('act');
			if($act == "dispPageAdminContentModify" || $act == "procWidgetGenerateCodeInPage")
				return $oTemplate->compile($tpl_path, "edit");
			return $oTemplate->compile($tpl_path, $tpl_file);
		}
	}
	class mediaItem extends Object {
		var $browser_title = null;
		var $has_first_thumbnail_idx = false;
		var $first_thumbnail_idx = null;
		var $contents_link = null;
		var $domain = null;

		function mediaItem($browser_title=''){
			$this->browser_title = $browser_title;
		}
		function getBrowserTitle(){
			return $this->browser_title;
		}

		function setContentsLink($link){
			$this->contents_link = $link;
		}
		function getContentsLink(){
			return $this->contents_link;
		}

		function setFirstThumbnailIdx($first_thumbnail_idx){
			if(is_null($this->first_thumbnail) && $first_thumbnail_idx>-1) {
				$this->has_first_thumbnail_idx = true;
				$this->first_thumbnail_idx= $first_thumbnail_idx;
			}
		}
		function getFirstThumbnailIdx(){
			return $this->first_thumbnail_idx;
		}
		function haveFirstThumbnail() {
			return $this->has_first_thumbnail_idx;
		}
		function setTitle($title){
			$this->add('title',$title);
		}
		function getTitle($cut_size = 0, $tail='...'){
			$title = strip_tags($this->get('title'));
			if($cut_size) $title = cut_str($title, $cut_size, $tail);
			$attrs = array();
			if($this->get('title_bold') == 'Y') $attrs[] = 'font-weight:bold';
			if($this->get('title_color') && $this->get('title_color') != 'N') $attrs[] = 'color:#'.$this->get('title_color');
			if(count($attrs)) $title = sprintf("<span style=\"%s\">%s</span>", implode(';', $attrs), htmlspecialchars($title));
			return $title;
		}
		function setCategory($category){
			$this->add('category',$category);
		}
		function getCategory(){
			return $this->get('category');
		}
		function setDomain($domain) {
			static $default_domain = null;
			if(!$domain) {
				if(is_null($default_domain)) $default_domain = Context::getDefaultUrl();
				$domain = $default_domain;
			}
			$this->domain = $domain;
		}
		function getDomain() {
			return $this->domain;
		}
		function setContent($content){
			$this->add('cm_content',$content);
		}
		function getContent(){
			return $this->get('cm_content');
		}
		function setExtValue($extvalue){
			$this->add('extvalue',$extvalue);
		}
		function getExtValue(){
			return $this->get('extvalue');
		}
		function setThumbnail($thumbnail){
			$this->add('cm_thumbnail',$thumbnail);
		}
		function getThumbnail(){
			return $this->get('cm_thumbnail');
		}
		function setImageMax($image_max){
			$this->add('image_max',$image_max);
		}
		function getImageMax(){
			return $this->get('image_max');
		}
		function setMediaType($mediainfo){
			if(is_array($mediainfo)) {
				for($i=0,$upfileno=count($mediainfo);$i<$upfileno;$i++) {
					$filename = strtolower($mediainfo[$i]->source_filename);
					$srcname = getSiteUrl().substr($mediainfo[$i]->uploaded_filename, 2);
					if(preg_match('/\.(avi|wmv|asf|asx|wma|swf|mov|mpg|mpeg|mp4|m4v|f4v|flv|3gp|3g2|f4a|f4b|m4a|m4b|m4p|rbs|aac|ogg|oga|m3u8|wav|mp3|3gpp|3gpp2|ogv|webm|divx|mkv|png|jpg|jpeg|gif)/i',$filename)) $mediainfo = $srcname;
					if(preg_match('/\.(xml|srt)/i',$filename)) $this->add('subtitle',$srcname);
				}
			}

			if (preg_match("/youtube.com\/(v\/|watch\?)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'youtube';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif(preg_match("/youtu.be/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'youtube';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif(preg_match("/vimeo.com/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'vimeo';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif (preg_match("/(tvpot|flvs).daum\.net/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'daum';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif (preg_match("/serviceapi.nmv.naver.com/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'naver';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif (preg_match("/(channel|flvr).pandora\.tv/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'pandora';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif (preg_match("/(player|static).youku.com/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'embed';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif (preg_match("/(afbbs).afreeca.com/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'embed';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif(preg_match("/\.(3gp|3gpp)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'video/3gpp';
				$mediatype = '3gpp';
			}elseif(preg_match("/\.(3gpp2|3g2)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'video/3gpp2';
				$mediatype = '3gpp2';
			}elseif(preg_match("/\.(flv|swf)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'application/x-shockwave-flash';
				$mediatype = 'flash';
			}elseif(preg_match("/\.(f4v|m4v|mp4)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'video/mp4';
				$mediatype = 'mp4';
			}elseif(preg_match("/\.(mov)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'video/quicktime';
				$mediatype = 'quicktime';
			}elseif(preg_match("/\.(qt)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'video/quicktime';
				$mediatype = 'quicktime';
			}elseif(preg_match("/\.(ogv)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'html5';
				$minfo = 'video/ogg';
				$mediatype = 'ogg';
			}elseif(preg_match("/\.(webm)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'html5';
				$minfo = 'video/webm';
				$mediatype = 'webm';
			}elseif(preg_match("/\.(f4a|f4b|m4a|m4b|m4p)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/mp4';
				$mediatype = 'mp4';
			}elseif(preg_match("/\.(ogg|oga)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/ogg';
				$mediatype = 'ogg';
			}elseif(preg_match("/\.(aac)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/aac';
				$mediatype = 'aac';
			}elseif(preg_match("/\.(mp3)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/mp3';
				$mediatype = 'mp3';
			}elseif(preg_match("/\.(m3u8)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/x-mpegurl';
				$mediatype = 'mp3';
			}elseif(preg_match("/\.(wav)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/x-wav';
				$mediatype = 'wav';
			}elseif(preg_match("/\.(rbs)/i",strtolower($mediainfo))) {
				$mediafile = $mediainfo;
				$mediaplayer = 'jwplayer';
				$minfo = 'audio/rbs';
				$mediatype = 'rbs';
			}elseif(preg_match("/\.(divx|mkv|avi)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'divx';
				$minfo = 'video/divx';
				$mediatype = 'divx';
			}elseif(preg_match("/\.(wmv)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'mplayer';
				$minfo = 'application/x-mplayer2';
				$mediatype = 'wmv';
			}elseif(preg_match("/\.(asf|asx)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'mplayer';
				$minfo = 'video/x-ms-asf';
				$mediatype = 'asf';
			}elseif(preg_match("/\.(wma)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'mplayer';
				$minfo = 'audio/x-ms-wma';
				$mediatype = 'wma';
			}elseif(preg_match("/\.(mpg|mpeg)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'video/mpeg';
				$mediatype = 'mpeg';
			}elseif(preg_match("/\.(mp3)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'audio/mpeg';
				$mediatype = 'mpeg';
			}elseif(preg_match("/\.(mid|midi)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'audio/midi';
				$mediatype = 'midi';
			}elseif(preg_match("/\.(aif|aiff)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'audio/x-aiff';
				$mediatype = 'aif';
			}elseif(preg_match("/\.(au|snd)/i",strtolower($mediainfo))){
				$mediafile = $mediainfo;
				$mediaplayer = 'quicktime';
				$minfo = 'audio/basic';
				$mediatype = 'au';
			}elseif(preg_match("/\.(png|jpg|jpeg|gif)/i",strtolower($mediainfo))){
				$mediafile = '';
				$mediaplayer = '';
				$minfo = '';
				$mediatype = 'image';
			}else{
				$mediafile = '';
				$mediaplayer = '';
				$minfo = '';
				$mediatype = '';
			}

			if($mediaplayer!='') $this->add('mediaplayer',$mediaplayer);
			if($minfo!='') $this->add('minfo',$minfo);
			if($mediatype!='') $this->add('mediatype',$mediatype);
			if($mediafile!='') {
				$this->add('mediafile',$mediafile);
				$this->add('ptyptoinfo','Y');
			}
		}
		function getMediaPlayer(){
			return $this->get('mediaplayer');
		}
		function getMediaType(){
			return $this->get('mediatype');
		}
		function getMediaFile(){
			return $this->get('mediafile');
		}
		function setCaption($caption){
			if(is_array($caption)) {
				for($i=0,$upfileno=count($caption);$i<$upfileno;$i++) {
					$filename = strtolower($caption[$i]->source_filename);
					$srcname = substr($caption[$i]->uploaded_filename, 2);
					if(preg_match('/\.(xml|srt)/i',$filename)) $subtitle = getSiteUrl().$srcname;
				}
				$this->add('subtitle',$subtitle);
			}
		}
		function getCaption(){
			return $this->get('subtitle');
		}
		function setLink($url){
			$this->add('url',$url);
		}
		function getLink(){
			return $this->get('url');
		}
		function setLinkDoc($linkdoc){
			$this->add('linkdoc',$linkdoc);
		}
		function getLinkDoc(){
			return $this->get('linkdoc');
		}

		function setMedia($mfile,$mwidth,$mheight){
			$mlist_id = 'cm01_'.mt_rand();
			$this->add('mlist_id',$mlist_id);
			$wmode = 'opaque';
			$defaultpath = Context::getDefaultUrl();
			if(substr($defaultpath, -1)!="/") $defaultpath = Context::getDefaultUrl()."/";
			if($this->get('mediaplayer')=='swfobject') {
$mplaylist='
<div id="'.$mlist_id.'" style="width:'.$mwidth.'px;height:'.$mheight.'px"></div>
<script type="text/javascript">
var flashvars = {"file":"'.$mfile.'","stretching":"exactfit","preload":"none"};
var params = {"allowfullscreen":"true","allowscriptaccess":"always","wmode":"'.$wmode.'","controlbar":"bottom","autostart":"false"};
var attributes = {"id": "'.$mlist_id.'","name": "'.$mlist_id.'"};
swfobject.embedSWF("'.$defaultpath.'widgets/contentsmedia/skins/mplayer/player.swf", "'.$mlist_id.'", "'.$mwidth.'", "'.$mheight.'", "9", "false", flashvars, params, attributes);
</script>';
			} elseif($this->get('mediaplayer')=='jwplayer') {
$mplaylist='<div id="'.$mlist_id.'" style="width:'.$mwidth.'px;height:'.$mheight.'px">Loading the player ...</div><script type="text/javascript">jQuery(document).ready(function(){ jwplayer("'.$mlist_id.'").setup({flashplayer: "'.$defaultpath.'widgets/contentsmedia/skins/mplayer/player.swf",file: "'.$mfile.'",image: "'.$this->get('image_max').'",width: '.$mwidth.',height: '.$mheight.',controlbar: "bottom"});});</script>';
			} elseif($this->get('mediaplayer')=='pandora') {
				$parts = parse_url($mfile);
				if($parts['query']) $chinfo = substr($parts['query'], 3);
				$mplaylist='
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="'.$mwidth.'" height="'.$mheight.'" id="movie" align="middle">	<param name="quality" value="high" />	<param name="movie" value="http://flvr.pandora.tv/flv2pan/flvmovie.dll/'.$chinfo.'&amp;skin=1&countryChk=ko" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><param name="wmode" value="'.$wmode.'" /><embed src="http://flvr.pandora.tv/flv2pan/flvmovie.dll/'.$chinfo.'&amp;skin=1&countryChk=ko" type="application/x-shockwave-flash" wmode="'.$wmode.'" allowScriptAccess="always" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" width="'.$mwidth.'" height="'.$mheight.'"></embed></object>';
			} elseif($this->get('mediaplayer')=='daum') {
				$parts = parse_url($mfile);
				if($parts['query']) $chinfo = $parts['query'];
$mplaylist='
<object type="application/x-shockwave-flash" id="'.$mlist_id.'" width="'.$mwidth.'" height="'.$mheight.'" align="middle" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0"><param name="movie" value="http://flvs.daum.net/flvPlayer.swf?'.$chinfo.'" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><param name="bgcolor" value="#000000" /><param name="wmode" value="'.$wmode.'" /><embed src="http://flvs.daum.net/flvPlayer.swf?'.$chinfo.'" width="'.$mwidth.'" height="'.$mheight.'" allowScriptAccess="always" wmode="'.$wmode.'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" allowFullScreen="true" bgcolor="#000000" ></embed></object>';
			} elseif($this->get('mediaplayer')=='naver') {
$mplaylist='
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="'.$mlist_id.'" width="'.$mwidth.'" height="'.$mheight.'"><param name="movie" value="'.$mfile.'" /><param name="wmode" value="'.$wmode.'" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><embed src="'.$mfile.'" wmode="'.$wmode.'" width="'.$mwidth.'" height="'.$mheight.'" allowScriptAccess="always" name="'.$mlist_id.'" id="'.$mlist_id.'" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed></object>';
			} elseif($this->get('mediaplayer')=='youku') {
$mplaylist='
<embed src="'.$mfile.'" quality="high" width="'.$mwidth.'" height="'.$mheight.'" wmode="'.$wmode.'" align="middle" allowScriptAccess="sameDomain" allowFullscreen="true" type="application/x-shockwave-flash"></embed>';
			} elseif($this->get('mediaplayer')=='divx') {
$mplaylist='
<object classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" width="'.$mwidth.'" height="'.$mheight.'" codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab">
<param name="mode" value="mini">
<param name="bufferingMode" value="auto">
<param name="wmode" value="'.$wmode.'" />
<param name="previewImage" value="'.$this->get('image_max').'" />
<param name="autoPlay" value="false" />
<param name="src" value="'.$mfile.'" />
<embed type="video/divx" src="'.$mfile.'" mode="mini" bufferingMode="auto" wmode="'.$wmode.'" width="'.$mwidth.'" height="'.$mheight.'" autoPlay="false"  previewImage="'.$this->get('image_max').'"  pluginspage="http://go.divx.com/plugin/download/">
</embed>
</object>
<br />No video? <a href="http://www.divx.com/software/divx-plus/web-player" target="_blank">Download</a> the DivX Plus Web Player.';
			} elseif($this->get('mediaplayer')=='mplayer') {
				$useragent = $_SERVER['HTTP_USER_AGENT'];
				if(preg_match('/Chrome/i',$useragent)||preg_match('/Safari/i',$useragent)||preg_match('/MSIE/i',$useragent)) {
				// 구글 크롬인 경우 WMP를 사용하면 메뉴가 밑으로 내려가는 문제가 있어서, 실버라이트 이용
					$mplaylist  =  '
					<div id="'.$mlist_id.'" style="position:relative;width:'.$mwidth.'px;height:'.$mheight.'px;">Please install the Silverlight!</div>
					<script type="text/javascript">
					jQuery(document).ready(function(){
						var cnt = document.getElementById("'.$mlist_id.'");
						var src = "'.$defaultpath.'widgets/contentsmedia/skins/mplayer/wmvplayer.xaml";
						var cfg = {
							overstretch:"true",
							windowless:"true",
							wmode:"'.$wmode.'",
							shownavigation:"true",
							lightcolor:"f85010",
							file:"'.$mfile.'",
							image:"'.$this->get('image_max').'",
							screencolor:"000000",
							width:"'.$mwidth.'",
							height:"'.$mheight.'",
							preload:"none",
							backgroundcolor:"ffffff"
						};
						var ply = new jeroenwijering.Player(cnt,src,cfg);
					});
					</script>';
				} elseif(preg_match('/Firefox/i',$useragent)) {
					$mplaylist  =  '
<object id="'.$mlist_id.'" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" type="application/x-oleobject" height="'.$mheight.'" width="'.$mwidth.'" align="absmiddle" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95">
<param name="FileName" value="'.$mfile.'" />
<param name="ShowControls" value="false" />
<param name="ShowStatusBar" value="false" />
<param name="ShowTracker" value="false" />
<param name="ShowDisplay" value="false" />
<param name="Autostart" value="false" />
<param name="wmode" value="'.$wmode.'" />
<param name="WindowlessVideo" value="true" />
<param name="stretchToFit" value="false" />
<param name="enabled" value="true" />
<param name="enableContextMenu" value="true" />
<param name="fullScreen" value="true" />
<param name="AutoSize" value="true" />
<param name="ClickToPlay" value="true" />
<embed src="'.$mfile.'" width="'.$mwidth.'" height="'.$mheight.'" wmode="'.$wmode.'" autostart="0" align="absmiddle" type="application/x-ms-wmp" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/download/default.asp" showcontrols=0 showdisplay="0" ShowTracker=0 showstatusbar="0" ></embed></object>';
				} elseif(preg_match('/TEST/i',$useragent)) {
					$mplaylist  =  '
<div id="'.$mlist_id.'" style="position:relative; width:'.$mwidth.'px; height:'.$mheight.'px;overflow:hidden;margin:0;padding:0;margin-top:-14px \0/;">
<object type="application/x-oleobject" height="'.$mheight.'" width="'.$mwidth.'" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95">
<param name="FileName" value="'.$mfile.'" />
<param name="TransparentAtStart" value="false">
<param name="width" value="'.$mwidth.'">
<param name="height" value="'.$mheight.'">
<param name="ShowControls" value="true" />
<param name="ShowStatusBar" value="false" />
<param name="ShowTracker" value="false" />
<param name="ShowDisplay" value="false" />
<param name="Autostart" value="false" />
<param name="WindowlessVideo" value="true" />
<param name="stretchToFit" value="false" />
<param name="enabled" value="true" />
<param name="enableContextMenu" value="true" />
<param name="fullScreen" value="true" />
<param name="AutoSize" value="false" />
<param name="ClickToPlay" value="true" />
<embed src="'.$mfile.'" width="'.$mwidth.'" height="'.$mheight.'" autostart="0" type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/download/default.asp" showcontrols=1 showdisplay="0" ShowTracker=0 showstatusbar="0" ></embed></object></div>';
				} else {
					$mplaylist  =  '
	<div id="'.$mlist_id.'" style="position:relative; width:'.$mwidth.'px; height:'.$mheight.'px;">
	<a href="'.$mfile.'" class="'.$mlist_id.'">Please install the Windows Media Player!</a>
	<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function($){
		$(".'.$mlist_id.'").media({ 
		width:     '.$mwidth.', 
		height:    '.$mheight.', 
		autoplay:  false, 
		attrs:     { windowlessvideo: "true", allowfullscreen: "true", showControls: "true", showstatusbar: "false" },  // object/embed attrs 
		params:    { AllowFullScreen: "true", ShowControls: "true", ShowDisplay: "false", ShowStatusBar: "false", ShowTracker: "false", TransparentAtStart: "true", Enabled: "true", EnableContextMenu: "true", WindowlessVideo: "true", stretchToFit: "true", uiMode: "mini" },
		caption:   false // supress caption text 
		});
	});
	//]]>
	</script>
	</div>';
				}
			} elseif($this->get('mediaplayer')=='quicktime') {
				$mplaylist  =  '<a href="'.$mfile.'" class="'.$mlist_id.'">Please install the Quicktime!</a>
					<script type="text/javascript">
					//<![CDATA[
					jQuery(document).ready(function($){
						$(".'.$mlist_id.'").media({ 
							width:     '.$mwidth.', 
							height:    '.$mheight.', 
							autoplay:  false, 
							attrs:     { autoStart:  "false", windowlessvideo: "true", allowfullscreen: "true" },  // object/embed attrs 
							params:    { autoStart: "false", allowfullscreen: "true" },
							caption:   false // supress caption text 
						});
					});
					//]]>
					</script>';
			} elseif($this->get('mediaplayer')=='youtube') {
			preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $mfile, $vid);
			if(isset($vid[2]) && $vid[2] != ''){$youid = $vid[2];}
			$mplaylist='
<iframe style="z-index:1" type="text/html" width="'.$mwidth.'" height="'.$mheight.'" src="http://www.youtube.com/embed/'.$youid.'?wmode=transparent&hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
</iframe>';
			} elseif($this->get('mediaplayer')=='embed') {
			$mplaylist='<embed src="'.$mfile.'" wmode="'.$wmode.'" width="'.$mwidth.'" 
           height="'.$mheight.'" allowScriptAccess="always" name="'.$mlist_id.'" id="'.$mlist_id.'" allowFullScreen="true" type="'.$this->get('minfo').'" />';
			} elseif($this->get('mediaplayer')=='vimeo') {
			sscanf(parse_url($mfile, PHP_URL_PATH), '/%d', $vimeoid);
$mplaylist='
<iframe src="http://player.vimeo.com/video/'.$vimeoid.'?title=0&amp;byline=0&amp;portrait=0" width="'.$mwidth.'" height="'.$mheight.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
			}
			$this->add('mplaylist',$mplaylist);
		}
		function getMedia(){
			return $this->get('mplaylist');
		}
		function setExtraImages($extra_images){
			$this->add('extra_images',$extra_images);
		}
		function printExtraImages() {
			return $this->get('extra_images');
		}
		function setUpFileList($attachedfile){
			$imgno=count($attachedfile);
			$fileidx = mt_rand(0,$imgno-1);

			$filename = strtolower($attachedfile[$fileidx]->source_filename);
			$srcname = substr($attachedfile[$fileidx]->uploaded_filename, 2);
			$srcname = getSiteUrl().$srcname;
			if($srcname && !preg_match('/^([a-z]+):\/\//i',$srcname)) $srcname = 'http://'.$srcname;

			$this->add('upfilelist',$srcname);
		}
		function getAttachedFile(){
			return $this->get('upfilelist');
		}
		function setVotedCount($voted_count){
			$this->add('voted_count',$voted_count);
		}
		function getVotedCount() {
			return $this->get('voted_count');
		}
		function setReadedCount($readed_count){
			$this->add('readed_count',$readed_count);
		}
		function getReadedCount() {
			return $this->get('readed_count');
		}
		function setNickName($nick_name){
			$this->add('nick_name',$nick_name);
		}
		function getNickName(){
			return $this->get('nick_name');
		}
		function setRegdate($regdate){
			$this->add('regdate',$regdate);
		}
		function getRegdate($format = 'Y.m.d H:i:s') {
			return zdate($this->get('regdate'), $format);
		}
		function getMemberSrl() {
			return $this->get('member_srl');
		}
		function getCommentCount(){
			$comment_count = $this->get('comment_count');
			return $comment_count>0 ? $comment_count : '';
		}

	}
?>

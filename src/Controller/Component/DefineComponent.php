<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;

class DefineComponent extends Component
{
    const BUSINESS_CATEGORIES_DL_DIR   = 'Data/download/BusinessStudyCategories/';
    const BUSINESS_CATEGORIES_UL_DIR   = 'Data/upload/BusinessUploadContents/';
    const BUSINESS_CATEGORIES_VIEW_DIR = '/app/data/BusinessStudyCategories/';
    const BUSINESS_CATEGORIES_DIR      = 'BusinessStudyCategories/';
    const BUSINESS_CONTENTS_VIEW_DIR   = '/app/data/BusinessStudyContents/';
    const BUSINESS_CONTENTS_DIR        = 'BusinessStudyContents/';
    const GAME_CATEGORIES_DL_DIR       = 'Data/download/GameStudyCategories/';
    const GAME_CATEGORIES_UL_DIR       = 'Data/upload/GameUploadContents/';
    const GAME_CATEGORIES_VIEW_DIR     = '/app/data/GameStudyCategories/';
    const GAME_CATEGORIES_DIR          = 'GameStudyCategories/';
    const GAME_CONTENTS_VIEW_DIR       = '/app/data/GameStudyContents/';
    const GAME_CONTENTS_DIR            = 'GameStudyContents/';
    const STUDY_UPLOAD_STATUS          = array("Let's try!", 'Scoring...', 'Retry!', 'Clear!', 'Perfect!');
    const STUDY_LEVEL_COLOR            = array('g1', 'db2', 'do3', 'p4', 'k5'); // 学習コンテンツ レベル分けヘッダーカラー 1:ダークグリーン、2：ネイビー、3：ダークオレンジ、4：パープル、5：ブラック
    const DL_FILE_TYPE                 = array('', 'zip', 'pdf', 'txt');

    public $allowFileTypes = array('zip', 'pdf', 'doc', 'docx', 'xls', 'xlsx');
}
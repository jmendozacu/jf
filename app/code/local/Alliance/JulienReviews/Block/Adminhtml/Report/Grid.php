<?php

class Alliance_JulienReviews_Block_Adminhtml_Report_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('date');
        $this->setId('alliance_julienreviews_review_grid');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        return 'alliance_julienreviews/review_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('date',
            array(
                'header'=> $this->__('Date'),
                'index' => 'date',
                'type'  => 'date',
            )
        );

        $this->addColumn('customer_email',
            array(
                'header'=> $this->__('Customer Email'),
                'index' => 'customer_email',
            )
        );

        $this->addColumn('product_sku',
            array(
                'header'=> $this->__('Product SKU'),
                'index' => 'product_sku',
            )
        );

        $this->addColumn('product_name',
            array(
                'header'=> $this->__('Product Name'),
                'index' => 'product_name',
            )
        );

        $this->addColumn('star_rating',
            array(
                'header'=> $this->__('Star Rating'),
                'index' => 'star_rating',
                'align' =>'right',
            )
        );

        $this->addColumn('review_headline',
            array(
                'header'=> $this->__('Headline'),
                'index' => 'review_headline',
                'type'  => 'text',
            )
        );

        $this->addColumn('review_text',
            array(
                'header'=> $this->__('Review Text'),
                'index' => 'review_text',
                'type'  => 'text',
            )
        );

        $this->addColumn('recommended',
            array(
                'header'=> $this->__('Recommended'),
                'index' => 'recommended',
            )
        );

        $this->addColumn('purchased_at',
            array(
                'header'=> $this->__('Purchased At'),
                'index' => 'purchased_at',
            )
        );

        $this->addColumn('age_range',
            array(
                'header'=> $this->__('Age Range'),
                'index' => 'age_range',
                'column_css_class'=>'no-display',
                'header_css_class'=>'no-display',
            )
        );

        $this->addColumn('location',
            array(
                'header'=> $this->__('Location'),
                'index' => 'location',
                'column_css_class'=>'no-display',
                'header_css_class'=>'no-display',
            )
        );

        $this->addColumn('helpful_yes',
            array(
                'header'=> $this->__('Helpful Yes'),
                'index' => 'helpful_yes',
                'column_css_class'=>'no-display',
                'header_css_class'=>'no-display',
            )
        );

        $this->addColumn('helpful_no',
            array(
                'header'=> $this->__('Helpful No'),
                'index' => 'helpful_no',
                'column_css_class'=>'no-display',
                'header_css_class'=>'no-display',
            )
        );

        $this->addColumn('status',
            array(
                'header'=> $this->__('Status'),
                'index' => 'status',
                'column_css_class'=>'no-display',
                'header_css_class'=>'no-display',
            )
        );

        $this->addExportType('*/*/exportCsv',
            Mage::helper('alliance_julienreviews')->__('CSV'));

        return parent::_prepareColumns();
    }
}
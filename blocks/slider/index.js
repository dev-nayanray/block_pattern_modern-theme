import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, SelectControl } from '@wordpress/components';

registerBlockType('my-modern-theme/slider', {
    title: 'Custom Slider',
    icon: 'slides',
    category: 'design',
    attributes: {
        showArrows: { type: 'boolean', default: true },
        showDots: { type: 'boolean', default: true },
        autoplay: { type: 'boolean', default: false },
        effect: { type: 'string', default: 'slide' },
    },

    edit: ({ attributes, setAttributes }) => {
        const TEMPLATE = [['core/cover']];

        return (
            <>
                <InspectorControls>
                    <PanelBody title="Slider Settings">
                        <ToggleControl
                            label="Show Arrows"
                            checked={attributes.showArrows}
                            onChange={(value) => setAttributes({ showArrows: value })}
                        />
                        <ToggleControl
                            label="Show Dots"
                            checked={attributes.showDots}
                            onChange={(value) => setAttributes({ showDots: value })}
                        />
                        <ToggleControl
                            label="Autoplay"
                            checked={attributes.autoplay}
                            onChange={(value) => setAttributes({ autoplay: value })}
                        />
                        <SelectControl
                            label="Transition Effect"
                            value={attributes.effect}
                            options={[
                                { label: 'Slide', value: 'slide' },
                                { label: 'Fade', value: 'fade' },
                                { label: 'Cube', value: 'cube' },
                            ]}
                            onChange={(value) => setAttributes({ effect: value })}
                        />
                    </PanelBody>
                </InspectorControls>

                <div className="custom-slider-editor">
                    <InnerBlocks
                        template={TEMPLATE}
                        templateLock={false}
                        allowedBlocks={['core/cover']}
                        renderAppender={() => <InnerBlocks.ButtonBlockAppender />}
                    />
                </div>
            </>
        );
    },

    save: ({ attributes }) => {
        return <InnerBlocks.Content />;
    },
});
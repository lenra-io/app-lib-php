<?php

namespace Lenra\App\Response\View\Model;

class ComponentsMenu
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The identifier of the component
     *
     * @var mixed
     */
    protected $type;
    /**
     * The menu items
     *
     * @var ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    protected $children;
    /**
     * The identifier of the component
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The identifier of the component
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The menu items
     *
     * @return ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The menu items
     *
     * @param ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[] $children
     *
     * @return self
     */
    public function setChildren(array $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
}
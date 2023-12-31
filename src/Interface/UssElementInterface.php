<?php

namespace Ucscode\UssElement\Interface;

use Ucscode\UssElement\UssElement;

interface UssElementInterface
{
    public function setVoid(bool $void): self;

    public function setAttribute(string $attr, ?string $value = null): self;

    public function getAttribute(string $attr): ?string;

    public function getAttributes(): array;

    public function hasAttribute(string $attr): bool;

    public function removeAttribute(string $attr): self;

    public function addAttributeValue(string $attr, string $value): self;

    public function removeAttributeValue(string $attr, string $value): self;

    public function hasAttributeValue(string $attr, string $value): bool;

    public function setContent(string $content): self;

    public function getContent(): ?string;

    public function hasContent(): bool;

    // Child Management

    public function freeElement(): self;

    public function appendChild(UssElement $child): self;

    public function prependChild(UssElement $child): self;

    public function insertBefore(UssElement $child, UssElement $refNode): self;

    public function insertAfter(UssElement $child, UssElement $refNode): self;

    public function replaceChild(UssElement $child, UssElement $refNode): self;

    public function getFirstChild(): ?UssElement;

    public function getLastChild(): ?UssElement;

    public function getChild(int $index): ?UssElement;

    public function removeChild(UssElement $child): void;

    public function getChildren(): array;

    public function getHTML(bool $indent = false): string;

    public function open(): string;

    public function close(): string;

    public function setInvisible(bool $status): self;

    /**
     * Parent
     */
    public function getParentElement(): ?UssElementInterface;

    public function hasParentElement(): bool;
}

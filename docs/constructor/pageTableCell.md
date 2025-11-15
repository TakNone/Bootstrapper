# pageTableCell

**Description** : *Table cell*

**Layer** : 216

```tl
pageTableCell#34566b6a flags:# header:flags.0?true align_center:flags.3?true align_right:flags.4?true valign_middle:flags.5?true valign_bottom:flags.6?true text:flags.7?RichText colspan:flags.1?int rowspan:flags.2?int = PageTableCell;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **header** | [`flags.0?true`](type/true) | Is this element part of the column header |
| **align_center** | [`flags.3?true`](type/true) | Horizontally centered block |
| **align_right** | [`flags.4?true`](type/true) | Right-aligned block |
| **valign_middle** | [`flags.5?true`](type/true) | Vertically centered block |
| **valign_bottom** | [`flags.6?true`](type/true) | Block vertically-aligned to the bottom |
| **text** | [`flags.7?RichText`](type/RichText) | Content |
| **colspan** | [`flags.1?int`](type/int) | For how many columns should this cell extend |
| **rowspan** | [`flags.2?int`](type/int) | For how many rows should this cell extend |

---

## Type

[PageTableCell](type/PageTableCell)

---

## Example

```php
$pageTableCell = $client->pageTableCell(
	header : true,
	align_center : true,
	align_right : true,
	valign_middle : true,
	valign_bottom : true,
	text : $client->textEmpty(),
	colspan : 69,
	rowspan : 96,
);
```
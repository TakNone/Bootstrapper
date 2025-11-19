# pageTableRow

**Description** : *Table row*

**Layer** : 218

```tl
pageTableRow#e0c0c5e5 cells:Vector<PageTableCell> = PageTableRow;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>cells</mark> | [`Vector<PageTableCell>`](type/PageTableCell) | Table cells |

---

## Type

[PageTableRow](type/PageTableRow)

---

## Example

```php
$pageTableRow = $client->pageTableRow(
	cells : array(
		$client->pageTableCell(
			header : true,
			align_center : true,
			align_right : true,
			valign_middle : true,
			valign_bottom : true,
			text : $client->textEmpty(),
			colspan : 88,
			rowspan : 23,
		),
	),
);
```
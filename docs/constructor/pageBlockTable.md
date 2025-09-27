# pageBlockTable

**Description** : *Table*

**Layer** : 216

```tl
pageBlockTable#bf4dea82 flags:# bordered:flags.0?true striped:flags.1?true title:RichText rows:Vector<PageTableRow> = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **bordered** | [`flags.0?true`](type/true) | Does the table have a visible border? |
| **striped** | [`flags.1?true`](type/true) | Is the table striped? |
| <mark>title</mark> | [`RichText`](type/RichText) | Title |
| <mark>rows</mark> | [`Vector<PageTableRow>`](type/PageTableRow) | Table rows |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockTable(
	bordered : true,
	striped : true,
	title : $client->textEmpty(),
	rows : array(
		$client->pageTableRow(
			cells : array(
				$client->pageTableCell(
					header : true,
					align_center : true,
					align_right : true,
					valign_middle : true,
					valign_bottom : true,
					text : $client->textEmpty(...),
					colspan : 73,
					rowspan : 1,
				),
			),
		),
	),
);
```
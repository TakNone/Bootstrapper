# updateQuickReplies

**Description** : *Info about or the order of quick reply shortcuts &raquo; was changed*

**Layer** : 216

```tl
updateQuickReplies#f9470ab2 quick_replies:Vector<QuickReply> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>quick_replies</mark> | [`Vector<QuickReply>`](type/QuickReply) | New quick reply shortcut order and information |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateQuickReplies(
	quick_replies : array(
		$client->quickReply(
			shortcut_id : 8,
			shortcut : 'soBcfFtwxrC67b18',
			top_message : 76,
			count : 11,
		),
	),
);
```
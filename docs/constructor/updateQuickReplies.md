# updateQuickReplies

**Description** : *Info about or the order of quick reply shortcuts &raquo; was changed*

**Layer** : 227

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
			shortcut_id : 40,
			shortcut : 'DTels7jig8z5PI1c',
			top_message : 39,
			count : 100,
		),
	),
);
```
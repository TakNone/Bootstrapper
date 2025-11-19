# messageActionTopicEdit

**Description** : *Forum topic information was edited*

**Layer** : 218

```tl
messageActionTopicEdit#c0944820 flags:# title:flags.0?string icon_emoji_id:flags.1?long closed:flags.2?Bool hidden:flags.3?Bool = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title** | [`flags.0?string`](type/string) | New topic title |
| **icon_emoji_id** | [`flags.1?long`](type/long) | ID of the new custom emoji used as topic icon, or if it was removed |
| **closed** | [`flags.2?Bool`](type/Bool) | Whether the topic was opened or closed |
| **hidden** | [`flags.3?Bool`](type/Bool) | Whether the topic was hidden or unhidden (only valid for the "General" topic, id=1) |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTopicEdit(
	title : '0PMrjdYESgTmeX6K',
	icon_emoji_id : 5276031277707247081,
	closed : false,
	hidden : true,
);
```
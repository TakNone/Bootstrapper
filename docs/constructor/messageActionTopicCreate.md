# messageActionTopicCreate

**Description** : *A forum topic was created*

**Layer** : 216

```tl
messageActionTopicCreate#d999256 flags:# title_missing:flags.1?true title:string icon_color:int icon_emoji_id:flags.0?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_missing** | [`flags.1?true`](type/true) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | Topic name |
| <mark>icon_color</mark> | [`int`](type/int) | If no custom emoji icon is specified, specifies the color of the fallback topic icon (RGB), one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F |
| **icon_emoji_id** | [`flags.0?long`](type/long) | ID of the custom emoji used as topic icon |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTopicCreate(
	title_missing : true,
	title : 'dbGv9jTNrp3XeMJx',
	icon_color : 72,
	icon_emoji_id : 1278137198359203569,
);
```
# messages.searchStickers

**Description** : *Search for stickers using AI\-powered keyword search*

**Layer** : 214

```tl
messages.searchStickers#29b1c66a flags:# emojis:flags.0?true q:string emoticon:string lang_code:Vector<string> offset:int limit:int hash:long = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **emojis** | [`flags.0?true`](type/true) | If set, returns custom emoji stickers |
| <mark>q</mark> | [`string`](type/string) | The search term |
| <mark>emoticon</mark> | [`string`](type/string) | Space-separated list of emojis to search for |
| <mark>lang_code</mark> | [`Vector<string>`](type/string) | List of possible IETF language tags of the user's input language; may be empty if unknown |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here. The hash may be generated locally by using the ids of the returned or stored sticker documents |

---

## Result

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->searchStickers(
	emojis : true,
	q : '8GD9E7qb0AYB1z4i',
	emoticon : 'VP5tyiYva1deQnps',
	lang_code : array('oEClfGbrxBJ7A1OR'),
	offset : 0,
	limit : 89,
	hash : 0,
);
```
# messages.searchStickers

**Description** : *Search for stickers using AI\-powered keyword search*

**Layer** : 216

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
	q : '5TirXByl3u8tfpvq',
	emoticon : 'rXT0qOakcKNHEZwW',
	lang_code : array('T0KIwdZiQSRBeL2P'),
	offset : 0,
	limit : 77,
	hash : 0,
);
```
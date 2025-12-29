# channelForbidden

**Description** : *Indicates a channel/supergroup we can&#039;t access because we were banned, or for some other reason*

**Layer** : 218

```tl
channelForbidden#17d493d5 flags:# broadcast:flags.5?true megagroup:flags.8?true id:long access_hash:long title:string until_date:flags.16?int = Chat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **broadcast** | [`flags.5?true`](type/true) | Is this a channel |
| **megagroup** | [`flags.8?true`](type/true) | Is this a supergroup |
| <mark>id</mark> | [`long`](type/long) | Channel ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>title</mark> | [`string`](type/string) | Title |
| **until_date** | [`flags.16?int`](type/int) | The ban is valid until the specified date |

---

## Type

[Chat](type/Chat)

---

## Example

```php
$chat = $client->channelForbidden(
	broadcast : true,
	megagroup : true,
	id : -4242821325164290892,
	access_hash : 662796159203654862,
	title : 'Q548YXTbJGfaL3vI',
	until_date : 19,
);
```
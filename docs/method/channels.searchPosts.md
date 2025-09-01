# channels.searchPosts

**Description** : *Globally search for posts from public channels &raquo; \(including those we aren&#039;t a member of\) containing a specific hashtag*

**Layer** : 214

```tl
channels.searchPosts#f2c4f24d flags:# hashtag:flags.0?string query:flags.1?string offset_rate:int offset_peer:InputPeer offset_id:int limit:int allow_paid_stars:flags.2?long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **hashtag** | [`flags.0?string`](type/string) | The hashtag to search, without the # character |
| **query** | [`flags.1?string`](type/string) | NOTHING |
| <mark>offset_rate</mark> | [`int`](type/int) | Initially 0, then set to the next_rate parameter of messages.messagesSlice |
| <mark>offset_peer</mark> | [`InputPeer`](type/InputPeer) | Offsets for pagination, for more info click here |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| **allow_paid_stars** | [`flags.2?long`](type/long) | NOTHING |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->channels->searchPosts(
	hashtag : '1kVu9p5a8eWihHoJ',
	query : 'LaUv8dWtEYHgkAF4',
	offset_rate : 44,
	offset_peer : $client->inputPeerEmpty(),
	offset_id : 80,
	limit : 75,
	allow_paid_stars : -5560353071248946356,
);
```
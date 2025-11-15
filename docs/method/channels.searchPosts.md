# channels.searchPosts

**Description** : *Globally search for posts from public channels &raquo; \(including those we aren&#039;t a member of\) containing either a specific hashtag, or a full text query*

**Layer** : 216

```tl
channels.searchPosts#f2c4f24d flags:# hashtag:flags.0?string query:flags.1?string offset_rate:int offset_peer:InputPeer offset_id:int limit:int allow_paid_stars:flags.2?long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **hashtag** | [`flags.0?string`](type/string) | The hashtag to search, without the # character |
| **query** | [`flags.1?string`](type/string) | The full text query: each user has a limited amount of free full text search slots, after which payment is required, see here » for more info on the full flow |
| <mark>offset_rate</mark> | [`int`](type/int) | Initially 0, then set to the next_rate parameter of messages.messagesSlice, or if that is absent, the date of the last returned message |
| <mark>offset_peer</mark> | [`InputPeer`](type/InputPeer) | Offsets for pagination, for more info click here |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| **allow_paid_stars** | [`flags.2?long`](type/long) | For full text post searches (query), allows payment of the specified amount of Stars for the search, see here » for more info on the full flow |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FROZEN_METHOD_INVALID** | `420` | The current account is frozen, and thus cannot execute the specified action |

---

## Example

```php
$messagesMessages = $client->channels->searchPosts(
	hashtag : 'PA7vWNhIMesqKtLd',
	query : '0jC6VMTp4HL1cFa7',
	offset_rate : 0,
	offset_peer : $client->inputPeerEmpty(),
	offset_id : 0,
	limit : 57,
	allow_paid_stars : -2670242040255070792,
);
```
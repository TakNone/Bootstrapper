# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 216

```tl
exportedChatlistInvite#c5181ac flags:# revoked:flags.0?true title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.0?true`](type/true) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | Name of the link |
| <mark>url</mark> | [`string`](type/string) | The chat folder deep link » |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Peers to import |

---

## Type

[ExportedChatlistInvite](type/ExportedChatlistInvite)

---

## Example

```php
$exportedChatlistInvite = $client->exportedChatlistInvite(
	revoked : true,
	title : '7KTIWpDRjJ1lYZ4r',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : -2666613783340800819,
		),
		$client->peerChat(
			chat_id : -8557682356167344768,
		),
		$client->peerChannel(
			channel_id : -3268024736499125939,
		),
	),
);
```
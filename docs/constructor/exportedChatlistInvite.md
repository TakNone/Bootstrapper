# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 233

```tl
exportedChatlistInvite#c5181ac flags:# title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'cQrNqCIv7KbLRi0T',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : 1950125177173809478,
		),
		$client->peerChat(
			chat_id : 1266791424468988670,
		),
		$client->peerChannel(
			channel_id : 8758282782219425671,
		),
	),
);
```
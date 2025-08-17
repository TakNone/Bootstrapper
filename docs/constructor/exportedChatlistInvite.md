# exportedChatlistInvite

**Description** : *Exported chat folder deep link »*

**Layer** : 211

```tl
exportedChatlistInvite#c5181ac flags:# title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'jfPsEpKQedGNJ3Aw',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : -8794195280575759291,
		),
		$client->peerChat(
			chat_id : -645017512755372212,
		),
		$client->peerChannel(
			channel_id : 7160782576625959744,
		),
	),
);
```
# dialogFolder

**Description** : *Dialog in folder*

**Layer** : 214

```tl
dialogFolder#71bd134c flags:# pinned:flags.2?true folder:Folder peer:Peer top_message:int unread_muted_peers_count:int unread_unmuted_peers_count:int unread_muted_messages_count:int unread_unmuted_messages_count:int = Dialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Is this folder pinned |
| <mark>folder</mark> | [`Folder`](type/Folder) | The folder |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer in folder |
| <mark>top_message</mark> | [`int`](type/int) | Latest message ID of dialog |
| <mark>unread_muted_peers_count</mark> | [`int`](type/int) | Number of unread muted peers in folder |
| <mark>unread_unmuted_peers_count</mark> | [`int`](type/int) | Number of unread unmuted peers in folder |
| <mark>unread_muted_messages_count</mark> | [`int`](type/int) | Number of unread messages from muted peers in folder |
| <mark>unread_unmuted_messages_count</mark> | [`int`](type/int) | Number of unread messages from unmuted peers in folder |

---

## Type

[Dialog](type/Dialog)

---

## Example

```php
$dialog = $client->dialogFolder(
	pinned : true,
	folder : $client->folder(
		autofill_new_broadcasts : true,
		autofill_public_groups : true,
		autofill_new_correspondents : true,
		id : 99,
		title : '1s4wEGUIkx0XAzlF',
		photo : $client->chatPhotoEmpty(),
	),
	peer : $client->peerUser(
		user_id : -5350163182345071935,
	),
	top_message : 98,
	unread_muted_peers_count : 20,
	unread_unmuted_peers_count : 1,
	unread_muted_messages_count : 48,
	unread_unmuted_messages_count : 0,
);
```
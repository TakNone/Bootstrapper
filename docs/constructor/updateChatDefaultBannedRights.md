# updateChatDefaultBannedRights

**Description** : *Default banned rights in a normal chat were updated*

**Layer** : 216

```tl
updateChatDefaultBannedRights#54c01850 peer:Peer default_banned_rights:ChatBannedRights version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The chat |
| <mark>default_banned_rights</mark> | [`ChatBannedRights`](type/ChatBannedRights) | New default banned rights |
| <mark>version</mark> | [`int`](type/int) | Version |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatDefaultBannedRights(
	peer : $client->peerUser(
		user_id : 7105590207850463440,
	),
	default_banned_rights : $client->chatBannedRights(
		view_messages : true,
		send_messages : true,
		send_media : true,
		send_stickers : true,
		send_gifs : true,
		send_games : true,
		send_inline : true,
		embed_links : true,
		send_polls : true,
		change_info : true,
		invite_users : true,
		pin_messages : true,
		manage_topics : true,
		send_photos : true,
		send_videos : true,
		send_roundvideos : true,
		send_audios : true,
		send_voices : true,
		send_docs : true,
		send_plain : true,
		until_date : 32,
	),
	version : 7,
);
```
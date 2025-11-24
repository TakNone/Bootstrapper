# updatePeerSettings

**Description** : *Settings of a certain peer have changed*

**Layer** : 218

```tl
updatePeerSettings#6a7e7366 peer:Peer settings:PeerSettings = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>settings</mark> | [`PeerSettings`](type/PeerSettings) | Associated peer settings |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerSettings(
	peer : $client->peerUser(
		user_id : 726824851485072438,
	),
	settings : $client->peerSettings(
		report_spam : true,
		add_contact : true,
		block_contact : true,
		share_contact : true,
		need_contacts_exception : true,
		report_geo : true,
		autoarchived : true,
		invite_members : true,
		request_chat_broadcast : true,
		business_bot_paused : true,
		business_bot_can_reply : true,
		geo_distance : 53,
		request_chat_title : 'XDqWFdxaCeZi4rJn',
		request_chat_date : 14,
		business_bot_id : 5240817318244724098,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : -36432485126758813,
		registration_month : 'mEUqyOKet5pNzuSB',
		phone_country : '+1234567890',
		name_change_date : 84,
		photo_change_date : 98,
	),
);
```
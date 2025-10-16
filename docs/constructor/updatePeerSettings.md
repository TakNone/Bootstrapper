# updatePeerSettings

**Description** : *Settings of a certain peer have changed*

**Layer** : 216

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
		user_id : -5542116980161701876,
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
		geo_distance : 61,
		request_chat_title : 'bsAD4w2N8YeTuqhO',
		request_chat_date : 87,
		business_bot_id : -1855715116663453844,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 3494047624770651264,
		registration_month : '4HCwxUWIvrh5juF2',
		phone_country : '+1234567890',
		name_change_date : 98,
		photo_change_date : 50,
	),
);
```
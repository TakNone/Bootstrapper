# updatePeerSettings

**Description** : *Settings of a certain peer have changed*

**Layer** : 222

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
		user_id : -4024764619097785484,
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
		geo_distance : 81,
		request_chat_title : 'Kal2hzEfgSXOkMJ7',
		request_chat_date : 25,
		business_bot_id : 2298079928439153877,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 6448695725983916966,
		registration_month : 'R3XWhKJauZQ5SpVF',
		phone_country : '+1234567890',
		name_change_date : 5,
		photo_change_date : 15,
	),
);
```
# updatePeerSettings

**Layer** : 214

```tl
updatePeerSettings#6a7e7366 peer:Peer settings:PeerSettings = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>settings</mark> | [`PeerSettings`](type/PeerSettings) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerSettings(
	peer : $client->peerUser(
		user_id : -5497224157407563286,
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
		geo_distance : 64,
		request_chat_title : 'fxBUeJ1ohCDWp8Lz',
		request_chat_date : 29,
		business_bot_id : -4189671109943828569,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 8461026627564931206,
		registration_month : 'vxiNQVsh3Bywbrl0',
		phone_country : '+1234567890',
		name_change_date : 48,
		photo_change_date : 65,
	),
);
```
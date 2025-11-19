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
		user_id : -7692162790874390840,
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
		geo_distance : 55,
		request_chat_title : '0skKzyQYjmoEUrPV',
		request_chat_date : 33,
		business_bot_id : 2607921591343701173,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 3380076855141291692,
		registration_month : 'lK1JFeisgWYrSP3v',
		phone_country : '+1234567890',
		name_change_date : 93,
		photo_change_date : 87,
	),
);
```
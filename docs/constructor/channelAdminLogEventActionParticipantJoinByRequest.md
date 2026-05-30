# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 222

```tl
channelAdminLogEventActionParticipantJoinByRequest#afb6144a invite:ExportedChatInvite approved_by:long = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was used to join the chat |
| <mark>approved_by</mark> | [`long`](type/long) | ID of the admin that approved the invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantJoinByRequest(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'xHWqvuc7eOCBNrma',
		admin_id : -8455433877073132430,
		date : 84,
		start_date : 81,
		expire_date : 14,
		usage_limit : 67,
		usage : 50,
		requested : 29,
		subscription_expired : 43,
		title : 'RjNqi4bpQZYcHC26',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 95,
			amount : -6482092788861495317,
		),
	),
	approved_by : -1586639545919473474,
);
```
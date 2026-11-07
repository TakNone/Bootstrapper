# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 233

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
		link : 'cBEWwtAZ2SlD0Rex',
		admin_id : -8714274686010188375,
		date : 21,
		start_date : 99,
		expire_date : 83,
		usage_limit : 60,
		usage : 94,
		requested : 59,
		subscription_expired : 59,
		title : '34jM2gCvHJNOUfGW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 6,
			amount : 5495072856362372570,
		),
	),
	approved_by : 2153136242887703179,
);
```
# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 214

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
		link : 'bypx4wvjGLBNURml',
		admin_id : -2989265575621524375,
		date : 5,
		start_date : 17,
		expire_date : 68,
		usage_limit : 89,
		usage : 62,
		requested : 69,
		subscription_expired : 39,
		title : 'E1fuXdx8D5lwCAzg',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 17,
			amount : 3119847981477064566,
		),
	),
	approved_by : 2885999704239728690,
);
```
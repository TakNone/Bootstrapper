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
		link : '0LFtNPQmIaD7AbpJ',
		admin_id : 4931671535214537778,
		date : 7,
		start_date : 100,
		expire_date : 87,
		usage_limit : 21,
		usage : 85,
		requested : 89,
		subscription_expired : 92,
		title : 'LSgCqlyPAi5DFtKp',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 86,
			amount : -1346496766158074340,
		),
	),
	approved_by : -506683602715092846,
);
```
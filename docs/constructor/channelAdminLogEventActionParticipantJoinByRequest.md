# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 216

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
		link : 'YkBdhStV74Ogb5UA',
		admin_id : -1183811042847424799,
		date : 67,
		start_date : 73,
		expire_date : 8,
		usage_limit : 88,
		usage : 23,
		requested : 98,
		subscription_expired : 63,
		title : 'A7haoxSQLRs1DGXI',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 20,
			amount : -2714687637134667592,
		),
	),
	approved_by : 462811301261214353,
);
```
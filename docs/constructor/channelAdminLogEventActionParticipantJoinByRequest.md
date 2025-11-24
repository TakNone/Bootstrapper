# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 218

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
		link : 'QXUeOwZ3aSW4NIu7',
		admin_id : 2367740104268281743,
		date : 76,
		start_date : 82,
		expire_date : 85,
		usage_limit : 82,
		usage : 70,
		requested : 91,
		subscription_expired : 3,
		title : 'Do9vTnpkAejJ0Zlr',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 24,
			amount : 3282121885404278703,
		),
	),
	approved_by : -6691041390548282965,
);
```
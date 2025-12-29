# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 218

```tl
channelAdminLogEventActionExportedInviteRevoke#410a134e invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was revoked |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteRevoke(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'kbye4S0Lx7hUgPju',
		admin_id : 4413328878741988141,
		date : 47,
		start_date : 35,
		expire_date : 61,
		usage_limit : 50,
		usage : 26,
		requested : 79,
		subscription_expired : 100,
		title : 'goXWlSN1uzZjEAPd',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 61,
			amount : 3704520492853330150,
		),
	),
);
```
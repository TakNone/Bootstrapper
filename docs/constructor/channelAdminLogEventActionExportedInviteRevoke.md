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
		link : 'FqSXeKr26RWEl5OI',
		admin_id : -2685308479337290551,
		date : 9,
		start_date : 92,
		expire_date : 0,
		usage_limit : 7,
		usage : 65,
		requested : 100,
		subscription_expired : 53,
		title : 'uWJMIh7AsB4UjoQP',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 51,
			amount : -3721728924522968236,
		),
	),
);
```
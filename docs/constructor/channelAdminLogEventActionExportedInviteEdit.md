# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 227

```tl
channelAdminLogEventActionExportedInviteEdit#e90ebb59 prev_invite:ExportedChatInvite new_invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Previous chat invite information |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | New chat invite information |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteEdit(
	prev_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'DhKH6IgSo4awNnUF',
		admin_id : 4888315460279128742,
		date : 59,
		start_date : 20,
		expire_date : 1,
		usage_limit : 2,
		usage : 24,
		requested : 10,
		subscription_expired : 15,
		title : 'upfsTN3zvLI2ZB1G',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 86,
			amount : 2815546839432345889,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'CguTYfRO6cV0U3am',
		admin_id : -3876318486007948666,
		date : 9,
		start_date : 10,
		expire_date : 41,
		usage_limit : 18,
		usage : 73,
		requested : 78,
		subscription_expired : 63,
		title : 'Wmhjd04cFNY2ASCg',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 88,
			amount : -6093246306529336848,
		),
	),
);
```
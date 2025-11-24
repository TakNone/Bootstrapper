# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 218

```tl
payments.suggestedStarRefBots#b4d5d859 flags:# count:int suggested_bots:Vector<StarRefProgram> users:Vector<User> next_offset:flags.0?string = payments.SuggestedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results (for pagination) |
| <mark>suggested_bots</mark> | [`Vector<StarRefProgram>`](type/StarRefProgram) | Suggested affiliate programs (full or partial list to be fetched using pagination) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Peers mentioned in suggested_bots |
| **next_offset** | [`flags.0?string`](type/string) | Next offset for pagination |

---

## Type

[payments.SuggestedStarRefBots](type/payments.SuggestedStarRefBots)

---

## Example

```php
$paymentsSuggestedStarRefBots = $client->payments->suggestedStarRefBots(
	count : 0,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -16080828719032754,
			commission_permille : 15,
			duration_months : 76,
			end_date : 80,
			daily_revenue_per_user : $client->starsAmount(
				amount : -2446615966455435320,
				nanos : 68,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4747106259957504980,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 4041439320864899584,
			access_hash : 1928622609473560894,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9tUKhjx1bkBcJq4d',
					reason : 'A07m5uEYiWby8Sxf',
					text : '7FHcyQoeKCWOrsLg',
				),
			),
			bot_inline_placeholder : 'xZLc6b5TXUQRGmrM',
			lang_code : 'yAzvGclIgiCN8kXf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 49,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 5637102062563721598,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 2807211967121016991,
			),
			bot_active_users : 35,
			bot_verification_icon : 5142902663161626924,
			send_paid_messages_stars : -8093677132937059441,
		),
	),
	next_offset : '3EPYRke4Ugvxu2nH',
);
```
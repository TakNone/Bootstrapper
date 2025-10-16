# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 216

```tl
payments.suggestedStarRefBots#b4d5d859 flags:# count:int suggested_bots:Vector<StarRefProgram> users:Vector<User> next_offset:flags.0?string = payments.SuggestedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 66,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 7684008740980438448,
			commission_permille : 76,
			duration_months : 79,
			end_date : 35,
			daily_revenue_per_user : $client->starsAmount(
				amount : -7888463690879032288,
				nanos : 29,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7542062720832575885,
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
			id : 168846934986619205,
			access_hash : -8083331491837381670,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jQwAS8bCsVOYet63',
					reason : 'iANoDJsUrKxOQe18',
					text : 'K429Nvzch6eBOdmF',
				),
			),
			bot_inline_placeholder : 'Lsxo02v9ARZyHF7S',
			lang_code : 'AqrtO2P3Rb4puiBk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 94,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -6301713272704916154,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 3597252799579973773,
			),
			bot_active_users : 81,
			bot_verification_icon : 2822839210951803291,
			send_paid_messages_stars : 3184000242158246545,
		),
	),
	next_offset : 'L1dS47AwB8vNPRF9',
);
```
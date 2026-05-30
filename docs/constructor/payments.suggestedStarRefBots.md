# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 222

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
	count : 89,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 2834531598594180504,
			commission_permille : 71,
			duration_months : 12,
			end_date : 84,
			daily_revenue_per_user : $client->starsAmount(
				amount : 3806471844328335295,
				nanos : 3,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 3584864787952365790,
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
			bot_forum_can_manage_topics : true,
			id : -7053464181660778107,
			access_hash : 3382901443411559504,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LfYBNr7uW2iw09EI',
					reason : 'EBlpzMFf2IDkdqmh',
					text : 'NjZMEz3tJLlWsF2k',
				),
			),
			bot_inline_placeholder : 'ZTySRfsWENd0Io47',
			lang_code : 'oc17emw9AFqSCIDx',
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
				max_id : 97,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -2569769548221161421,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : 9196298167697275048,
			),
			bot_active_users : 79,
			bot_verification_icon : -1950551623157516668,
			send_paid_messages_stars : 8153447133603428760,
		),
	),
	next_offset : 'N2PtgEnc6I0plbJf',
);
```
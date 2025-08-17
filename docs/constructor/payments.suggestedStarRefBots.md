# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 211

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
	count : 13,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -3350077856691322668,
			commission_permille : 40,
			duration_months : 63,
			end_date : 60,
			daily_revenue_per_user : $client->starsAmount(
				amount : -5936543940792834855,
				nanos : 99,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1344173152751872150,
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
			id : -5476163372587755027,
			access_hash : -5119205471385074123,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mTH6h5EvjcFgdsBx',
					reason : '5j3Z2n6awmkIzTgc',
					text : 'rzdsp1wI2yMC0ZWq',
				),
			),
			bot_inline_placeholder : 'dUQSreoZB1baPT9V',
			lang_code : 'fqtirHWMTLJ0eQnY',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 8,
			color : $client->peerColor(
				color : 73,
				background_emoji_id : -4208708718725057799,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -3655878553420179931,
			),
			bot_active_users : 94,
			bot_verification_icon : -4660451454503957087,
			send_paid_messages_stars : 7107591979054145461,
		),
	),
	next_offset : 'BtlLAU07nYc6wmuK',
);
```
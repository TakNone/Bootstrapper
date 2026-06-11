# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 227

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
	count : 83,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -6870885505193131662,
			commission_permille : 46,
			duration_months : 1,
			end_date : 32,
			daily_revenue_per_user : $client->starsAmount(
				amount : 6119119814518935292,
				nanos : 34,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5825466258754536736,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -7123723722913393022,
			access_hash : -4181713266126170552,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3U9lpKJqt75bsYi1',
					reason : 'KsDnUatgOTxc9MWz',
					text : 'qaIiFuc2pk8OeELU',
				),
			),
			bot_inline_placeholder : 'cCHsEPFNGpKQAT1J',
			lang_code : 'KvyDhaFAXMGYWUxz',
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
				max_id : 0,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 4674339908388840723,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -4355724387649719663,
			),
			bot_active_users : 72,
			bot_verification_icon : -872864373171178224,
			send_paid_messages_stars : 6651181830596709958,
		),
	),
	next_offset : 'RU1kA2nd9Bx5XE7u',
);
```
# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 229

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
	count : 61,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 3500202062208846909,
			commission_permille : 25,
			duration_months : 24,
			end_date : 98,
			daily_revenue_per_user : $client->starsAmount(
				amount : 606875576485924029,
				nanos : 52,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8348281020472055244,
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
			id : -2260123984291998567,
			access_hash : 2672557326318541121,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GR0ydUzHclehrDXP',
					reason : '42FPaC9AySecmMHz',
					text : 'mIJWQnMqworztlPf',
				),
			),
			bot_inline_placeholder : 'xEPVqKDH08BA41nN',
			lang_code : 'AeY5Pnt2kfihqlIT',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 77,
				background_emoji_id : 7269872408388114658,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -7695633657582437051,
			),
			bot_active_users : 61,
			bot_verification_icon : -8396745066065396296,
			send_paid_messages_stars : -3298522683743444321,
			linked_community_id : -4116698704306919802,
		),
	),
	next_offset : 'LDV6jf8IZmtxP91O',
);
```
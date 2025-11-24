# payments.starGiftAuctionState

**Layer** : 218

```tl
payments.starGiftAuctionState#e98e474 gift:StarGift state:StarGiftAuctionState user_state:StarGiftAuctionUserState timeout:int users:Vector<User> = payments.StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | NOTHING |
| <mark>user_state</mark> | [`StarGiftAuctionUserState`](type/StarGiftAuctionUserState) | NOTHING |
| <mark>timeout</mark> | [`int`](type/int) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[payments.StarGiftAuctionState](type/payments.StarGiftAuctionState)

---

## Example

```php
$paymentsStarGiftAuctionState = $client->payments->starGiftAuctionState(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 3444045191048868735,
		sticker : $client->documentEmpty(
			id : -4101118530072653265,
		),
		stars : 37112652458892285,
		availability_remains : 52,
		availability_total : 63,
		availability_resale : -7961606929771418976,
		convert_stars : -4208149686621180646,
		first_sale_date : 14,
		last_sale_date : 51,
		upgrade_stars : 8755497778872610007,
		resell_min_stars : -2301370843419578859,
		title : 'zZbjn5mleq8FDXsC',
		released_by : $client->peerUser(
			user_id : -7199870159121426249,
		),
		per_user_total : 37,
		per_user_remains : 74,
		locked_until_date : 39,
		auction_slug : 'Itzkpvie3mdo9lNX',
		gifts_per_round : 77,
	),
	state : $client->starGiftAuctionState(
		version : 63,
		start_date : 93,
		end_date : 65,
		min_bid_amount : -7134882048802695576,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 59,
				amount : 290716093981708505,
				date : 28,
			),
		),
		top_bidders : array(-7631794070850989704),
		next_round_at : 99,
		gifts_left : 74,
		current_round : 40,
		total_rounds : 36,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -6300590727979086868,
		bid_date : 50,
		min_bid_amount : 1094736619544955035,
		peer : $client->peerUser(
			user_id : -6975334691538106794,
		),
		acquired_count : 34,
	),
	timeout : 12,
	users : array(
		$client->userEmpty(
			id : 5494988351954166727,
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
			id : 1160171676788949622,
			access_hash : -8209095904824021299,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'E7wFnPpgmjUZB06i',
					reason : 'C1ULayRqEKgTh96H',
					text : 'Rw2GSYZ5cFQlOxdu',
				),
			),
			bot_inline_placeholder : 'aSmODl5JvMP6Hx8K',
			lang_code : 'dE5UKIpQ6jaeNOk7',
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
				max_id : 67,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -3598368308086299306,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 7910754316453603701,
			),
			bot_active_users : 61,
			bot_verification_icon : -7279944133978149544,
			send_paid_messages_stars : -7543599908043250177,
		),
	),
);
```
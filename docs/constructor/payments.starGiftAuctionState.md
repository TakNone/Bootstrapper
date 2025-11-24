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
		id : -238483605869585244,
		sticker : $client->documentEmpty(
			id : -5872550396240353095,
		),
		stars : -4268619279571920710,
		availability_remains : 18,
		availability_total : 28,
		availability_resale : 7637586189967996936,
		convert_stars : 2934803795826921639,
		first_sale_date : 48,
		last_sale_date : 54,
		upgrade_stars : 5634620836942161614,
		resell_min_stars : 6075751137854715782,
		title : 'w7sPjTL91FkDQtUm',
		released_by : $client->peerUser(
			user_id : 8387696700458235805,
		),
		per_user_total : 29,
		per_user_remains : 51,
		locked_until_date : 85,
		auction_slug : 'TklMPyfBeWm5CL6E',
		gifts_per_round : 49,
	),
	state : $client->starGiftAuctionState(
		version : 71,
		start_date : 25,
		end_date : 7,
		min_bid_amount : 4920193348108639695,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 35,
				amount : -8045761473101198660,
				date : 71,
			),
		),
		top_bidders : array(-6091745145657922692),
		next_round_at : 94,
		gifts_left : 1,
		current_round : 68,
		total_rounds : 54,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -285694113471574024,
		bid_date : 70,
		min_bid_amount : 6476504962297813624,
		peer : $client->peerUser(
			user_id : 5177877978938947588,
		),
		acquired_count : 85,
	),
	timeout : 13,
	users : array(
		$client->userEmpty(
			id : -3207493749624808797,
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
			id : 5560417036832788150,
			access_hash : -183343674111910407,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hi0jFpKeILflOARM',
					reason : 'x4IcnbACOD3F8jQd',
					text : 'lZrKTOcD5xeCVQhN',
				),
			),
			bot_inline_placeholder : 'sxXQ7zycH9mt04Zq',
			lang_code : 'DtfPaABFlcYIOWoy',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -6604629967814814121,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 6313886675791863776,
			),
			bot_active_users : 57,
			bot_verification_icon : 6383417305471934758,
			send_paid_messages_stars : 8608784845723475036,
		),
	),
);
```
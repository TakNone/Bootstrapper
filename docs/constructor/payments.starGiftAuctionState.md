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
		id : 5325414283629445739,
		sticker : $client->documentEmpty(
			id : 3395471036495313136,
		),
		stars : -3017814204241269219,
		availability_remains : 88,
		availability_total : 27,
		availability_resale : -6377641421261035832,
		convert_stars : 4484713302772451804,
		first_sale_date : 93,
		last_sale_date : 49,
		upgrade_stars : -4693348803517259115,
		resell_min_stars : -1468131505978614138,
		title : 'HlUc7JfBV3dbarxC',
		released_by : $client->peerUser(
			user_id : 8071963832835997577,
		),
		per_user_total : 43,
		per_user_remains : 41,
		locked_until_date : 51,
		auction_slug : 'MdacKESlhYZeNkRu',
		gifts_per_round : 93,
	),
	state : $client->starGiftAuctionState(
		version : 85,
		start_date : 48,
		end_date : 71,
		min_bid_amount : 5922072547723542453,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 54,
				amount : 6062797601338394340,
				date : 31,
			),
		),
		top_bidders : array(-8347565113582286316),
		next_round_at : 42,
		gifts_left : 1,
		current_round : 75,
		total_rounds : 82,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -990299243343772175,
		bid_date : 53,
		min_bid_amount : -961643376865515504,
		peer : $client->peerUser(
			user_id : 9019128604932724270,
		),
		acquired_count : 70,
	),
	timeout : 93,
	users : array(
		$client->userEmpty(
			id : 5774126662415149715,
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
			id : 8409090783420029863,
			access_hash : -6707976110556678197,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uhQdmlTZHI3JMiP1',
					reason : '7SUD0uFYeBcrvQsC',
					text : 'IPvu9bW0FZspEDmH',
				),
			),
			bot_inline_placeholder : 'wghmDTcokPN3pn0a',
			lang_code : 'iof9mQlRzO04kWNU',
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
				color : 7,
				background_emoji_id : -3988041638851512261,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -8925304394806272513,
			),
			bot_active_users : 74,
			bot_verification_icon : 634268274661730651,
			send_paid_messages_stars : -7766096156551304915,
		),
	),
);
```
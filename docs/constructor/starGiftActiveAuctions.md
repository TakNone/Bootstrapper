# starGiftActiveAuctions

**Layer** : 218

```tl
starGiftActiveAuctions#97f187d8 auctions:Vector<StarGiftActiveAuctionState> users:Vector<User> = StarGiftActiveAuctions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>auctions</mark> | [`Vector<StarGiftActiveAuctionState>`](type/StarGiftActiveAuctionState) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[StarGiftActiveAuctions](type/StarGiftActiveAuctions)

---

## Example

```php
$starGiftActiveAuctions = $client->starGiftActiveAuctions(
	auctions : array(
		$client->starGiftActiveAuctionState(
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				can_upgrade : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : 219822467872232072,
				sticker : $client->documentEmpty(
					id : 4437586870829437279,
				),
				stars : 4225959142954601307,
				availability_remains : 24,
				availability_total : 11,
				availability_resale : -7773560977354531363,
				convert_stars : -9045360668935546812,
				first_sale_date : 56,
				last_sale_date : 43,
				upgrade_stars : 4586636400529533516,
				resell_min_stars : -8486397501496256107,
				title : 'Ov7EsFP4bQreocfJ',
				released_by : $client->peerUser(
					user_id : -3441158868077513636,
				),
				per_user_total : 27,
				per_user_remains : 72,
				locked_until_date : 48,
				auction_slug : 'rKNYRd78Scw05HiM',
				gifts_per_round : 24,
			),
			state : $client->starGiftAuctionState(
				version : 28,
				start_date : 79,
				end_date : 33,
				min_bid_amount : -6782121940098186793,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 96,
						amount : 1282683511138663456,
						date : 52,
					),
				),
				top_bidders : array(-2559830443303377705),
				next_round_at : 63,
				gifts_left : 29,
				current_round : 90,
				total_rounds : 16,
			),
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -2483486725942281273,
				bid_date : 30,
				min_bid_amount : -4720170830585039012,
				peer : $client->peerUser(
					user_id : 1336774549663175500,
				),
				acquired_count : 14,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5193356658116083966,
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
			id : 3113853092875397566,
			access_hash : 1637659132876400495,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3SDhZOaVryew9pYB',
					reason : 'rUuVAGagbLEFSIKf',
					text : 'foItQ4LXHJM8D5su',
				),
			),
			bot_inline_placeholder : 'BLtoCFYJKTa6qwne',
			lang_code : 'wBCkXNemtsFR9DLh',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : -2154081311598967010,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 5681465833883162582,
			),
			bot_active_users : 17,
			bot_verification_icon : -301883605822134475,
			send_paid_messages_stars : 6410190873090547778,
		),
	),
);
```
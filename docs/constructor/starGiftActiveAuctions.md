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
				id : -6045363270432584768,
				sticker : $client->documentEmpty(
					id : 8970936330337985362,
				),
				stars : -8126354939740448174,
				availability_remains : 34,
				availability_total : 85,
				availability_resale : -7363881825676051295,
				convert_stars : 8302123782023313557,
				first_sale_date : 66,
				last_sale_date : 22,
				upgrade_stars : -7955417685395768637,
				resell_min_stars : -4692019364243123420,
				title : 'dFXxRpqoi05wU3j1',
				released_by : $client->peerUser(
					user_id : 3994348210347421308,
				),
				per_user_total : 72,
				per_user_remains : 58,
				locked_until_date : 27,
				auction_slug : 'd5lyL7KRXzkPqv6c',
				gifts_per_round : 81,
			),
			state : $client->starGiftAuctionState(
				version : 29,
				start_date : 32,
				end_date : 96,
				min_bid_amount : -8386185303864431803,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 68,
						amount : 8233250390767290806,
						date : 29,
					),
				),
				top_bidders : array(8015620994884166586),
				next_round_at : 75,
				gifts_left : 81,
				current_round : 42,
				total_rounds : 11,
			),
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -2689985916611780989,
				bid_date : 20,
				min_bid_amount : -7165723072804399885,
				peer : $client->peerUser(
					user_id : 3903414704416576983,
				),
				acquired_count : 48,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7642335820461906649,
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
			id : -4315724596359001500,
			access_hash : 4373958056003822002,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0inLVN1KBgukaYbc',
					reason : 'ycDJAzn0upQeXS1v',
					text : 'hHD3jFfyGMNgmoZ9',
				),
			),
			bot_inline_placeholder : '3Es4nqUBfXxjwuFy',
			lang_code : '9F4DS8ohJam2LKNB',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -6320469014035793677,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -3628706373234025338,
			),
			bot_active_users : 0,
			bot_verification_icon : 3427437673421946118,
			send_paid_messages_stars : 3804067234943498818,
		),
	),
);
```
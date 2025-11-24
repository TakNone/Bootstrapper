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
				id : 5914786595043048777,
				sticker : $client->documentEmpty(
					id : 227849564282187366,
				),
				stars : 5310035799623786537,
				availability_remains : 27,
				availability_total : 77,
				availability_resale : -1469502774875411170,
				convert_stars : -2004985633468613621,
				first_sale_date : 42,
				last_sale_date : 22,
				upgrade_stars : -7547265070466929064,
				resell_min_stars : -2560888223000671316,
				title : 'A4kP6ihLnvwS7XWJ',
				released_by : $client->peerUser(
					user_id : -513638942821448372,
				),
				per_user_total : 68,
				per_user_remains : 54,
				locked_until_date : 69,
				auction_slug : 'vyWIb50e6A1amBwU',
				gifts_per_round : 91,
			),
			state : $client->starGiftAuctionState(
				version : 73,
				start_date : 58,
				end_date : 1,
				min_bid_amount : 1966575638866503647,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 85,
						amount : -6080550682926357144,
						date : 98,
					),
				),
				top_bidders : array(-7982835259082261467),
				next_round_at : 8,
				gifts_left : 93,
				current_round : 11,
				total_rounds : 90,
			),
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 3990117352363680225,
				bid_date : 51,
				min_bid_amount : -6249096055504471236,
				peer : $client->peerUser(
					user_id : 7546742638747364342,
				),
				acquired_count : 42,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 1973338422574717487,
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
			id : 1035578788750097751,
			access_hash : 6577533549730775575,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cZws3LYolyMbXrh5',
					reason : 'JabHrigCEtvVpXOW',
					text : 'ZXMv0PnpBwRGmkOC',
				),
			),
			bot_inline_placeholder : 'jRUaPV7c81Kvhx9k',
			lang_code : 'AkBCbuT8M3eQRWIt',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -4972956195116531515,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 1990339296001428012,
			),
			bot_active_users : 56,
			bot_verification_icon : -196998580504535120,
			send_paid_messages_stars : 3491411250696744519,
		),
	),
);
```
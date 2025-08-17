# premium.myBoosts

**Description** : *A list of peers we are currently boosting, and how many boost slots we have left*

**Layer** : 211

```tl
premium.myBoosts#9ae228e2 my_boosts:Vector<MyBoost> chats:Vector<Chat> users:Vector<User> = premium.MyBoosts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_boosts</mark> | [`Vector<MyBoost>`](type/MyBoost) | Info about boosted peers and remaining boost slots |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Referenced chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Referenced users |

---

## Type

[premium.MyBoosts](type/premium.MyBoosts)

---

## Example

```php
$premiumMyBoosts = $client->premium->myBoosts(
	my_boosts : array(
		$client->myBoost(
			slot : 38,
			peer : $client->peerUser(
				user_id : -6389493215447513775,
			),
			date : 6,
			expires : 22,
			cooldown_until_date : 73,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4057404016734876783,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1355525782803123296,
			title : 'Iz2HkYTFNW3Ehq84',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 49,
			version : 33,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -7809558654325123502,
			title : 'MiAOY3gtwbvBJLDd',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 8969142975173566451,
			access_hash : 2657395559053192820,
			title : 'PlcEZaetnIHUf0Tw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WyCDi56jGO0El71m',
					reason : 'wlegJGXkLYi6zuWm',
					text : '4mgHxkQXezhEcqMn',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 33,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 8,
			),
			participants_count : 96,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -2260993384875949339,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 7929782352279437372,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 62,
			bot_verification_icon : 4984121187349652562,
			send_paid_messages_stars : 5372415776426466614,
			linked_monoforum_id : 8853784903933102944,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7397081978856108056,
			access_hash : -801277699500238777,
			title : 'GXW2IFHoKMRja8e9',
			until_date : 59,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2993476979533857645,
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
			id : 3842155325743347840,
			access_hash : 1161742028932496477,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SFha3uGPC0gRb5dZ',
					reason : 'zoUsRiNZSMyVr3jx',
					text : 'F13I8q7EAVXw5SGJ',
				),
			),
			bot_inline_placeholder : 'EuYOtGjqy6cxlsS1',
			lang_code : 'Aan2BtquSWDKvORz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 60,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 3498349310983004161,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -5890428703554242478,
			),
			bot_active_users : 35,
			bot_verification_icon : 4882459402011467367,
			send_paid_messages_stars : 3752436016066440591,
		),
	),
);
```
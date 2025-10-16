# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 216

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 77,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -3938400332876652915,
			),
			date : 64,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7060386463353640110,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -18012093727859606,
			title : 'JBWz03prGUjhkdtH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 40,
			date : 70,
			version : 40,
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
				until_date : 85,
			),
		),
		$client->chatForbidden(
			id : -3617865362519932471,
			title : 'h7Vkp1WjCoPYnZqt',
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
			id : -5757838570801179653,
			access_hash : 1035923322107269015,
			title : 't6Sy1ABIuRz7ebPG',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FeZotsi8VXy2knba',
					reason : 'MCvUB23jQHxaPm1I',
					text : 'lan1OxmcyguQvdhk',
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
				until_date : 15,
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
				until_date : 80,
			),
			participants_count : 60,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 0,
				background_emoji_id : 4731078271720093110,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -8925976487007769181,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 33,
			bot_verification_icon : 8532598103650823790,
			send_paid_messages_stars : 3534903302427731060,
			linked_monoforum_id : -4435285834667459243,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7122061995641134060,
			access_hash : -3892416322873863791,
			title : 'bC2BM0Ngv5LZ3pAo',
			until_date : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6683516957198678447,
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
			id : 8854585902900464983,
			access_hash : -3492149830045038078,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UnPRLe0bFclNrZKw',
					reason : 'IicN741ABXvZjODp',
					text : 'WDCzaAdtnLkJXSpH',
				),
			),
			bot_inline_placeholder : '0dYRJeK8qMarIsmB',
			lang_code : 'XqN9fRmUAY1Fbd5D',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 4056158269081043890,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -2439269377140347452,
			),
			bot_active_users : 51,
			bot_verification_icon : -721574631505004191,
			send_paid_messages_stars : 5375660613861745520,
		),
	),
);
```
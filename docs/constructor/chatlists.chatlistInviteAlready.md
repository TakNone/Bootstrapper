# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 218

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 84,
	missing_peers : array(
		$client->peerUser(
			user_id : -8614547617760717394,
		),
		$client->peerChat(
			chat_id : 2143114281066304889,
		),
		$client->peerChannel(
			channel_id : -9072845511955214629,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : 907598721904945475,
		),
		$client->peerChat(
			chat_id : 4447257509612452062,
		),
		$client->peerChannel(
			channel_id : -4904528111813912956,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8919430547030156741,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5273789516040900205,
			title : 'cRK1vpqFSy0kY48O',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 33,
			version : 5,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 33,
			),
		),
		$client->chatForbidden(
			id : -2216900795396147177,
			title : 'd8mft3Z7RhOr9oMV',
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
			id : -346567814876384626,
			access_hash : -2852958864840157808,
			title : 'OM1nVkyGd6WsPYu5',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oJjzftOv3xUIbErS',
					reason : 'QDmExXVf2JuMIF8A',
					text : 'AxQrJ4TGMda8tEOK',
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
				until_date : 41,
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
				until_date : 71,
			),
			participants_count : 53,
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
				color : 56,
				background_emoji_id : -2623156965155407400,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 1756197505975343961,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 10,
			bot_verification_icon : 4220141767301238772,
			send_paid_messages_stars : 3087293961851239267,
			linked_monoforum_id : -4773376729891221826,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8369237545720059354,
			access_hash : -7021397703169920829,
			title : '3aeH8VYGmqXhxC2b',
			until_date : 92,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4942418835504043984,
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
			id : 6040132416944046866,
			access_hash : -5549920640450813034,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2QFZ4E8lCiGRfkJW',
					reason : 'L8N2IxXtvOAkzsTm',
					text : 'FizDyj9k0wocAHrL',
				),
			),
			bot_inline_placeholder : 'pIVeP1q8RSc6T9lZ',
			lang_code : 'Feh8UZAXKOdRyqT0',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -8963430724832455772,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : -5298711003963467962,
			),
			bot_active_users : 92,
			bot_verification_icon : 6870274118771034276,
			send_paid_messages_stars : -9050097450406555576,
		),
	),
);
```
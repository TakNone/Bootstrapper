# messages.messageViews

**Description** : *View, forward counter \+ info about replies*

**Layer** : 218

```tl
messages.messageViews#b6c4f543 views:Vector<MessageViews> chats:Vector<Chat> users:Vector<User> = messages.MessageViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<MessageViews>`](type/MessageViews) | View, forward counter + info about replies |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in constructor |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in constructor |

---

## Type

[messages.MessageViews](type/messages.MessageViews)

---

## Example

```php
$messagesMessageViews = $client->messages->messageViews(
	views : array(
		$client->messageViews(
			views : 15,
			forwards : 0,
			replies : $client->messageReplies(
				comments : true,
				replies : 94,
				replies_pts : 23,
				recent_repliers : array(
					$client->peerUser(
						user_id : -7673562841109427761,
					),
					$client->peerChat(
						chat_id : -6222898330426313953,
					),
					$client->peerChannel(
						channel_id : -4269686023396327999,
					),
				),
				channel_id : -2456266512044584553,
				max_id : 1,
				read_max_id : 59,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2496851150212046979,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -38078644438419682,
			title : 'YzDTFpG4wtRseJrZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 91,
			version : 45,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 35,
			),
		),
		$client->chatForbidden(
			id : 5580146383299639044,
			title : 'P2mwcxTsohdg8iE5',
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
			id : 3294127226243524340,
			access_hash : -9217600566365916917,
			title : 'eD4fzjrx0V9Pw8FC',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NucDyg9dbVe1CoLw',
					reason : 'JuL5qwXiF8p0vazy',
					text : 'PMhv8AZDOkKS4omw',
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
				until_date : 57,
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
				until_date : 97,
			),
			participants_count : 91,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 18,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -1183172095861170987,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 9117359385524202785,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 43,
			bot_verification_icon : 5822036531519110128,
			send_paid_messages_stars : -4922759871153831314,
			linked_monoforum_id : 3321989617388837929,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2855402556284281752,
			access_hash : 2786891891784974374,
			title : 'VLbBCtAdpQG0WY2o',
			until_date : 50,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5171478027162423166,
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
			id : 6090138642321471866,
			access_hash : -4911356298981153587,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'W2OpALPrV1R7F8Gw',
					reason : '8MNjsTiAOpfxh1XG',
					text : 'ylrBC25e09VWGO6L',
				),
			),
			bot_inline_placeholder : '3hlWbjUZqD0YaTgS',
			lang_code : 'I2i0eYgoj7mCGVQP',
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
				max_id : 96,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 6705021013277576107,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -6988683101108121116,
			),
			bot_active_users : 95,
			bot_verification_icon : -6190746607044360319,
			send_paid_messages_stars : -3665886969822329228,
		),
	),
);
```
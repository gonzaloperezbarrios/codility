SELECT sensor_id, event_type, value
 FROM bd_motor3.events 
 order by time desc, sensor_id asc, event_type asc limit 4
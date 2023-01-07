import classes from "./index.module.css";

export default function Button(props) {
  return <button className={classes.bg_button}>{props.children}</button>;
}
